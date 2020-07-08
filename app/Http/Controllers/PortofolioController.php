<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Pendidikan;
use Auth;
class PortofolioController extends Controller
{
    private $route = 'portofolio';

    function __construct(){
        // put your magic
    }

    public function index(){
        $data = [
            'pagetitle'    => NULL,
            'cardTitle'    => NULL,
            'cardSubTitle' => NULL,
            'breadcrumb'   => NULL,
            'route'        => $this->route
        ];
        
        return view($this->route . '.index', $data);
    }

    function profile(){
        $data = [
            'pagetitle'    => NULL,
            'cardTitle'    => 'Profile',
            'cardSubTitle' => 'Information',
            'cardBtmTitle' => 'Personal & Family',
            'breadcrumb'   => NULL,
            'route'        => $this->route
        ];
        
        return view($this->route . '.aside.profile', $data);
    }

    function skill(){
        $data = [
            'pagetitle'    => NULL,
            'cardTitle'    => 'Profile',
            'cardSubTitle' => 'Information',
            'cardBtmTitle' => 'Personal & Family',
            'breadcrumb'   => NULL,
            'route'        => $this->route,
            'records'      => [
                [ 'katek_id' => 1, 'katek_nama' => 'Programing Language', 
                    'items' => [
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'PHP', 'tekno_label' => 'Native', 'tekno_skill' => '88%', 'tekno_logo' => asset('assets/media/logos/php-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 2, */ 'tekno_nama' => 'Codeigniter', 'tekno_label' => 'Framework PHP', 'tekno_skill' => '89%', 'tekno_logo' => asset('assets/media/logos/codeigniter-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 10,*/ 'tekno_nama' => 'Rest API (Codeigniter)', 'tekno_label' => 'Framework PHP', 'tekno_skill' => '85%', 'tekno_logo' => asset('assets/media/logos/restapici-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 3, */ 'tekno_nama' => 'Laravel', 'tekno_label' => 'Framework PHP', 'tekno_skill' => '86%', 'tekno_logo' => asset('assets/media/logos/laravel-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 9, */ 'tekno_nama' => 'Rest API (LUMEN)', 'tekno_label' => 'Framework PHP', 'tekno_skill' => '84%', 'tekno_logo' => asset('assets/media/logos/lumen-logo.png'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 4, */ 'tekno_nama' => 'ASP', 'tekno_label' => 'Native', 'tekno_skill' => '75%', 'tekno_logo' => asset('assets/media/logos/asp-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 5, */ 'tekno_nama' => 'ASP.NET', 'tekno_label' => 'Framework .NET MVC', 'tekno_skill' => '74%', 'tekno_logo' => asset('assets/media/logos/asp.net-logo.jpg'), 'tekno_bg' => 'bg-warning', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 6, */ 'tekno_nama' => 'Javascript', 'tekno_label' => 'Native', 'tekno_skill' => '83%', 'tekno_logo' => asset('assets/media/logos/javascript-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 7, */ 'tekno_nama' => 'React Native Android', 'tekno_label' => 'Framework Javascript', 'tekno_skill' => '78%', 'tekno_logo' => asset('assets/media/logos/rn-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 8, */ 'tekno_nama' => 'Jquery', 'tekno_label' => 'Framework Javascript', 'tekno_skill' => '87%', 'tekno_logo' => asset('assets/media/logos/jquery-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                    ]
                ],
                [ 'katek_id' => 2, 'katek_nama' => 'Database',
                    'items' => [
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MYSQL', 'tekno_label' => '', 'tekno_skill' => '90%', 'tekno_logo' => asset('assets/media/logos/mysql-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'Postgres SQL', 'tekno_label' => '', 'tekno_skill' => '86%', 'tekno_logo' => asset('assets/media/logos/postgresql-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'SQL Server', 'tekno_label' => '', 'tekno_skill' => '83%', 'tekno_logo' => asset('assets/media/logos/sqlserver-logo.png'), 'tekno_bg' => 'bg-info', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'Oracle', 'tekno_label' => '', 'tekno_skill' => '74%', 'tekno_logo' => asset('assets/media/logos/oracle-logo.jpg'), 'tekno_bg' => 'bg-warning', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'DBA', 'tekno_label' => 'Database Analis', 'tekno_skill' => '90%', 'tekno_logo' => asset('assets/media/logos/dba-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                    ]
                ],
                [ 'katek_id' => 3, 'katek_nama' => 'Design',
                    'items' => [
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'HTML', 'tekno_label' => '', 'tekno_skill' => '88%', 'tekno_logo' => asset('assets/media/logos/html-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'CSS', 'tekno_label' => 'Native', 'tekno_skill' => '78%', 'tekno_logo' => asset('assets/media/logos/css-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'Bootstrap', 'tekno_label' => 'Framework CSS', 'tekno_skill' => '86%', 'tekno_logo' => asset('assets/media/logos/bootstrap-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'UIKIT', 'tekno_label' => 'Framework CSS', 'tekno_skill' => '70%', 'tekno_logo' => asset('assets/media/logos/uikit-logo.png'), 'tekno_bg' => 'bg-warning', 'step' => 'Hold' ],
                    ]
                ],
                [ 'katek_id' => 4, 'katek_nama' => 'Office Tools',
                    'items' => [
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MS. Word', 'tekno_label' => 'Microsoft Office', 'tekno_skill' => '86%', 'tekno_logo' => asset('assets/media/logos/msword-logo.png'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MS. Excel', 'tekno_label' => 'Microsoft Office', 'tekno_skill' => '85%', 'tekno_logo' => asset('assets/media/logos/msexcel-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MS. Power Point', 'tekno_label' => 'Microsoft Office', 'tekno_skill' => '82%', 'tekno_logo' => asset('assets/media/logos/mspowerpoint-logo.png'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MS. Project', 'tekno_label' => 'Microsoft Office', 'tekno_skill' => '76%', 'tekno_logo' => asset('assets/media/logos/project-logo.png'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'MS. Visio', 'tekno_label' => 'Microsoft Office', 'tekno_skill' => '80%', 'tekno_logo' => asset('assets/media/logos/visio-logo.jpg'), 'tekno_bg' => 'bg-info', 'step' => 'learning to Next Step' ],
                    ]
                ],
                [ 'katek_id' => 5, 'katek_nama' => 'Server',
                    'items' => [
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'Windows Server', 'tekno_label' => 'Microsoft', 'tekno_skill' => '65%', 'tekno_logo' => asset('assets/media/logos/winserver-logo.jpg'), 'tekno_bg' => 'bg-danger', 'step' => 'Hold' ],
                        [ /* 'tekno_id' => 1, */ 'tekno_nama' => 'Ubuntu', 'tekno_label' => 'Linux', 'tekno_skill' => '86%', 'tekno_logo' => asset('assets/media/logos/ubuntu-logo.jpg'), 'tekno_bg' => 'bg-success', 'step' => 'learning to Next Step' ],
                    ]
                ]
            ]
        ];

        return view($this->route . '.aside.skill', $data);
    }

    function project(){
        $data = [
            'pagetitle'    => NULL,
            'cardTitle'    => 'Profile',
            'cardSubTitle' => 'Information',
            'cardBtmTitle' => 'Personal & Family',
            'breadcrumb'   => NULL,
            'route'        => $this->route,
            'records'      => [
                [ 'project_nama' => 'Hotel Aircrew System', 'project_client' => 'PT Garuda Indonesia', 'project_start' => '08 Agustus 2019', 'project_end' => '30 Oktober 2019', 'Project_progress' => '100%', 'project_deskripsi' => 'HAS ( Hotel Aircrew System ) merupakan aplikasi yang di gunakan untuk me manage Crew dan Pilot yang akan menginap di hotel dengan ketetuan groundtime yang telah di tentukan oleh SOP PT garuda itu sendiri', 'thumb' => asset('assets/media/project-logos/has/logo.jpg') ],
                [ 'project_nama' => 'E-Procurement', 'project_client' => 'PT MRT Jakarta', 'project_start' => '08 Oktober 2019', 'project_end' => '30 Juni 2020', 'Project_progress' => '97%', 'project_deskripsi' => 'E-Procurement ini adalah aplikasi untuk kegiatan pengadaan barang dan jasa yang di lakukan pihak PT MRT. Prosesnya di mulai vendor baru registrasi sampai vendor itu di nyatakan lulus / tidaknya waktu ikut pengadaan.', 'thumb' => asset('assets/media/project-logos/mrt/logo.png') ],
                [ 'project_nama' => 'Re-enginering FOGA', 'project_client' => 'PT Garuda Indonesia', 'project_start' => NULL, 'project_end' => NULL, 'Project_progress' => '0%', 'project_deskripsi' => 'FOGA ( Fuel Online Garuda ) adalah sistem informasi untuk monitoring dan memanage bahan bakar pesawat-pesawat garuda. Untuk memudahkan proses di lapangan aplikasi ini juga bisa di pakai oleh pihak', 'thumb' => asset('assets/media/project-logos/has/logo.jpg') ],
            ]
        ];

        return view($this->route . '.aside.project', $data);
    }

    function projectDetail(Request $request){
        $post = $request->input();
        $data = [
            'records' => [ 
                'project_nama' => 'Hotel Aircrew System', 
                'project_client' => 'PT Garuda Indonesia', 
                'project_start' => '08 Agustus 2019', 
                'project_end' => '30 Oktober 2019', 
                'Project_progress' => '100%', 
                'project_deskripsi' => 'HAS ( Hotel Aircrew System ) merupakan aplikasi yang di gunakan untuk me manage Crew dan Pilot yang akan menginap di hotel dengan ketetuan groundtime yang telah di tentukan oleh SOP PT garuda itu sendiri', 
                'thumb' => asset('assets/media/project-logos/has/logo.jpg'),
                'project_job' => 'CO PM, Developer, DBA Analis, Bispro Analis',
                'project_url' => 'https://crewhotel.garuda-indonesia.com'
            ],
            'teams' => [
                ['tim_pic' => asset('assets/media/svg/avatars/001-boy.svg'), 'tim_nama' => 'Irwan Husein', 'tim_posisi' => 'Project Manager', 'tim_email' => 'irwan@cendana2000.co.id', 'tim_tlp' => '0897346745', 'tim_perushaan' => 'PT Cendana Teknika Utama' ],
                ['tim_pic' => asset('assets/media/svg/avatars/014-girl-7.svg'), 'tim_nama' => 'Andre Indra', 'tim_posisi' => 'Programmer', 'tim_email' => 'andre@mail.com', 'tim_tlp' => '0897346745', 'tim_perushaan' => 'PT Cendana Teknika Utama' ],
                ['tim_pic' => asset('assets/media/svg/avatars/018-girl-9.svg'), 'tim_nama' => 'Moch. Eka Ramadhan', 'tim_posisi' => 'Programmer', 'tim_email' => 'rama@mail.com', 'tim_tlp' => '0897346745', 'tim_perushaan' => 'PT Cendana Teknika Utama' ],
            ],
            'galery' => [
                ['foto_gambar' => asset('assets/media/project-logos/has/1.png'), 'foto_nama' => 'Foto 1', 'foto_deskripsi' => 'Halaman Dashboard'],
                ['foto_gambar' => asset('assets/media/project-logos/has/2.png'), 'foto_nama' => 'Foto 2', 'foto_deskripsi' => 'Halaman untuk create reservasi Crews dan Pilot. Dan langsung integrasi ke SAP (Create PO)'],
                ['foto_gambar' => asset('assets/media/project-logos/has/3.png'), 'foto_nama' => 'Foto 3', 'foto_deskripsi' => 'Capture monitoring data PO saat integrasi SAP'],
                ['foto_gambar' => asset('assets/media/project-logos/has/4.png'), 'foto_nama' => 'Foto 4', 'foto_deskripsi' => 'Capture untuk halaman login'],
            ]
        ];

        return view($this->route . '.aside.projectDetail', $data);
    }

    function cv(){
        $data = [];

        return view($this->route . '.aside.cv');
    }

    function company(){
        $data = [
            'route'   => $this->route,
            'records' => [
                ['perusahaan_logo' => asset('assets/media/logos/logo-acc.png'), 'perusahaan_nama' => 'PT Astra Credit Company', 'perusahaan_deskripsi' => 'Astra Credit Companies atau biasa disingkat dengan ACC adalah salah satu perusahaan pembiayaan mobil terbesar di Indonesia', 'perusahaan_mulai' => '10 Oct 2013', 'perusahaan_akhir' => '30 Mar 2014', 'perusahaan_tipe' => 'Magang', 'perusahaan_web' => 'acc.co.id', 'perusahaan_mainjob' => 'Junior Programmer', 'perusahaan_lokasi' => 'Jakarta Selatan (Fatmawati)', 
                    'perusahaan_jobdesc' => [
                        ['jobdesc_nama' => 'Junior Programer', 'jobdesc_mulai' => '10 Oct 2013', 'jobdesc_end' => '30 Mar 2014', 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Membangun aplikasi penilaian pegawai sederhana</li>
                                <li>Mengerjakan task-task yang sudah dibuatkan daftar pekerjaan olah atasan</li>
                                <li>Repair bug dan error</li>
                            </ul>'
                        ]
                    ]
                ],
                ['perusahaan_logo' => asset('assets/media/logos/logo-cendana.png'), 'perusahaan_nama' => 'PT Cendana Teknika Utama', 'perusahaan_deskripsi' => 'Kami adalah perusahaan yang bergerak di bidang teknologi informasi dan telekomunikasi.', 'perusahaan_mulai' => '14 Apr 2014', 'perusahaan_akhir' => NULL, 'perusahaan_tipe' => 'Kerja', 'perusahaan_web' => 'cendana2000.co.id', 'perusahaan_mainjob' => 'PIC Leader', 'perusahaan_lokasi' => 'Depok (PLN Gandul)', 
                    'perusahaan_jobdesc' => [
                        ['jobdesc_nama' => 'Junior Programer', 'jobdesc_mulai' => '14 Apr 2014', 'jobdesc_end' => '30 Nov 2014', 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Mengerjakan task-task level mudah yang sesuai info dari PIC / Leader</li>
                                <li>Repair bug dan error yang tidak terlalu sulit</li>
                            </ul>'
                        ],
                        ['jobdesc_nama' => 'Senior Programer', 'jobdesc_mulai' => '1 Dec Oct 2014', 'jobdesc_end' => '30 Oct 2015', 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Mengerjakan task-task level mudah samapi paling susah tingkatanya</li> 
                                <li>Bug Fixing</li>
                                <li>Mulai belajar menganalisa database sendiri</li>
                                <li>Menyesuaikan hasil pentest aplikasi terkait security</li>
                            </ul>'
                        ],
                        ['jobdesc_nama' => 'PIC Project + DBA Analis', 'jobdesc_mulai' => '1 Nov Oct 2015', 'jobdesc_end' => '30 Feb 2017', 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Meeting dengan client untuk gethring user requirement / kebutuhan user</li>
                                <li>Menganalisa bisnis proses sekaligus struktur database sesuai dengan kebutuan user</li>
                                <li>Mendelivery task-task ke developer</li>
                                <li>Memastikan task-task selesai sesuai dengan waktu yang sudah di tentukan</li>
                            </ul>'
                        ],
                        ['jobdesc_nama' => 'Manage Service Manager + PIC Project', 'jobdesc_mulai' => '1 Mar 2017', 'jobdesc_end' => '30 Des 2019', 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Monitoring aplikasi-aplikasi yang sedang berjalan</li>
                                <li>Manage finding error / bug</li>
                                <li>Delivery finding error / bug ke tim</li>
                                <li>Memastikan semua aplikasi yang di manage berjalan dengan lancar tidak ada problem ( Aplikasi, Server, Database, Jaringan)</li>
                                <li>Support Peak Seasson, biasanya ketika menjelang libur" besar (Lebaran, Natal, Dll) yang bisa menyebabkan trafic menjadi naik</li>
                            </ul>'
                        ],
                        ['jobdesc_nama' => 'CO PM + PIC Project', 'jobdesc_mulai' => '1 Jan 2020', 'jobdesc_end' => NULL, 'jobdesc_deskripsi' => '
                            <ul>
                                <li>Meeting dengan client untuk gethring user requirement / kebutuhan user</li>
                                <li>Menganalisa bisnis proses sekaligus struktur database sesuai dengan kebutuan user</li>
                                <li>Mendelivery task-task ke developer</li>
                                <li>Memastikan task-task selesai sesuai dengan waktu yang sudah di tentukan</li>
                            </ul>'
                        ],
                    ]
                ],
            ]
        ];

        return view($this->route . '.top.company', $data);
    }

    function education(){
        $data = [
            'records' => Pendidikan::selectRaw('pendidikan_nama,pendidikan_catatan')
                ->where('pendidikan_status', '1')
                ->where('pendidikan_created_by', Auth::user()->id)
                ->orderBy('pendidikan_order', 'ASC')
                ->get()
        ];

        return view($this->route . '.top.education', $data);
    }
}
