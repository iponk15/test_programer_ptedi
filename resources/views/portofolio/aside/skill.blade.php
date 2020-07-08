<div class="card card-custom card-stretch gutter-b card-shadowless bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Card Skills</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More technology i can used it.</span>
        </h3>
        <div class="card-toolbar">
            
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                <thead>
                    <tr class="text-left">
                        <th class="pr-0" width="1%">Technology</th>
                        <th width="20%"></th>
                        <th>Skill</th>
                        <th width="5%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $kategori)
                        <tr><td colspan="4"><h6>{{ $kategori['katek_nama'] }}</h6></td></tr>
                        @foreach($kategori['items'] as $item)
                            <tr>
                                <td class="pr-0">
                                    <div class="symbol symbol-50 symbol-light mt-1">
                                        <span class="symbol-label">
                                            <img src="{{ $item['tekno_logo'] }}" class="h-75 align-self-end" alt="" />
                                        </span>
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $item['tekno_nama'] }}</a>
                                    <span class="text-muted font-weight-bold text-muted d-block">{{ $item['tekno_label'] }}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 mr-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="text-muted mr-2 font-size-sm font-weight-bold">{{ $item['tekno_skill'] }}</span>
                                            <span class="text-muted font-size-sm font-weight-bold">{{ $item['step'] }}</span>
                                        </div>
                                        <div class="progress progress-xs w-100">
                                            <div class="progress-bar {{ $item['tekno_bg'] }}" role="progressbar" style="width: {{ $item['tekno_skill'] }};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 1-->