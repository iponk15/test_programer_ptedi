<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use App\User;
use DB;


class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithCustomStartCell
{
    protected $request;

    function __construct($request) {
        $this->request = $request;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $getUser = DB::table(DB::raw('users, (SELECT @row_number:=0) AS t'))
            ->selectRaw('
                (@row_number:=@row_number + 1) AS num,
                name,
                email,
                (
                    CASE
                        WHEN status = "0" THEN "Inactive"
                        WHEN status = "1" THEN "Active"
                        ELSE "Soft Delete"
                    END
                ) as status,
                DATE_FORMAT(created_at, "%W, %d %M %Y %H:%i") as created_at'
            );

        foreach ($this->request as $key => $value) {
            if($key == 'generalSearch'){
                if($value != NULL){
                    $getUser = $getUser->whereRaw("(name LIKE '%".$value."%' OR email LIKE '%".$value."%')");
                }
            }else{
                if($value != NULL){
                    $getUser = $getUser->where($key, $value);
                }
            }
        }

        $getUser = $getUser->get();
        return $getUser;
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'Status',
            'Create Date'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $jmlUser = DB::table('users');

                foreach ($this->request as $key => $value) {
                    if($key == 'generalSearch'){
                        if($value != NULL){
                            $jmlUser = $jmlUser->whereRaw("(name LIKE '%".$value."%' OR email LIKE '%".$value."%')");
                        }
                    }else{
                        if($value != NULL){
                            $jmlUser = $jmlUser->where($key, $value);
                        }
                    }
                }

                $jmlUser   = $jmlUser->count() + 2;
                $cellRange = 'B2:F2'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(13);
                $event->sheet->getStyle('B2:F'.$jmlUser)->ApplyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                ]);

                $event->sheet->getStyle('B2:F2')->ApplyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);

                $event->sheet->getStyle('E2:E'.$jmlUser)->ApplyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);

                $event->sheet->getStyle('B3:B'.$jmlUser)->ApplyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);

                $event->sheet->getStyle('F3:F'.$jmlUser)->ApplyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);
            }
        ];
    }

    public function startCell(): string
    {
        return 'B2';
    }
}
