<div class="card-body">
    <div class="d-flex">
        <!--begin: Pic-->
        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
            <div class="symbol symbol-50 symbol-lg-120">
                <img alt="Pic" src="assets/media/project-logos/3.png" />
            </div>
            <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
            </div>
        </div>
        <!--end: Pic-->
        <!--begin: Info-->
        <div class="flex-grow-1">
            <!--begin: Title-->
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="mr-3">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $records['project_nama'] }}
                    <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                    <!--end::Name-->
                    <!--begin::Contacts-->
                    <div class="d-flex flex-wrap my-2">
                        <a href="#" class="text-muted text-hover-primary font-weight-bold">
                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>{{ $records['project_client'] }}
                        </a>&nbsp;&nbsp;
                        <a href="#" class="text-muted text-hover-primary font-weight-bold">
                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>{{ $records['project_url'] }}
                        </a>&nbsp;&nbsp;
                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <mask fill="white">
                                            <use xlink:href="#path-1" />
                                        </mask>
                                        <g />
                                        <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>{{ $records['project_job'] }}
                        </a>
                    </div>
                    <!--end::Contacts-->
                </div>
                <div class="my-lg-0 my-1"></div>
            </div>
            <!--end: Title-->
            <!--begin: Content-->
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="row">
                    <div class="col-md-7" style="text-align: justify">{{ $records['project_deskripsi'] }}</div>
                    <div class="col-md-5">
                        <div class="d-flex flex-wrap align-items-center py-2">
                            <div class="d-flex align-items-center mr-5">
                                <div class="mr-6">
                                    <div class="font-weight-bold mb-2">Start Date</div>
                                    <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">07 May, 2020</span>
                                </div>
                                <div class="">
                                    <div class="font-weight-bold mb-2">Due Date</div>
                                    <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">10 June, 2021</span>
                                </div>
                            </div>
                            <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0" style="max-width: 40%;">
                                <span class="font-weight-bold">Progress</span>
                                <div class="progress progress-xs mt-2 mb-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bolder text-dark">78%</span>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            <!--end: Content-->
        </div>
        <!--end: Info-->
    </div>
    <div class="separator separator-solid my-7"></div>
    <!--begin::Accordion-->
    <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
        <div class="card">
            <div class="card-header" id="headingOne6">
                <div class="card-title" data-toggle="collapse" data-target="#collapseOne6">
                <i class="flaticon-pie-chart-1"></i>Environment</div>
            </div>
            <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: lavender;">
                                    <td width="25%" colspan="2" class="text-center">Aplication</td>
                                    <td width="25%" colspan="2" class="text-center">Database</td>
                                    <td width="25%" colspan="2" class="text-center">Server</td>
                                    <td width="25%" colspan="2" class="text-center">Others</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-right" width="12.5%">Program Language</td>
                                    <td width="12.5%">PHP v7.2</td>
                                    <td class="text-right" width="12.5%">DB 1</td>
                                    <td width="12.5%">Mysql v5.1.2</td>
                                    <td class="text-right" width="12.5%">Operating System</td>
                                    <td width="12.5%">Ubuntu 16.4 LTS</td>
                                    <td colspan="2" rowspan="2">
                                        Jquery v3.1.1, Bootstrap v4.5, HTML 5, Template Metronic, Codeigniter HMVC, Integrasi SAP, Server Cloud Azure, Highchart, Lib-MPDF PHP, Lib-PHPOFFICE PHP
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">Framework</td>
                                    <td>Codeigniter v3.0.1</td>
                                    <td class="text-right">DB 2</td>
                                    <td>Oracle v11</td>
                                    <td class="text-right">PHP</td>
                                    <td>v7.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo6">
                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6">
                <i class="flaticon2-notification"></i>Team Information</div>
            </div>
            <div id="collapseTwo6" class="collapse" data-parent="#accordionExample6">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr style="background-color: lavender;">
                                    <td class="text-center" width="3%">No.</td>
                                    <td class="text-center" width="3%">PIC</td>
                                    <td class="text-center">Name</td>
                                    <td class="text-center">Position</td>
                                    <td class="text-center">Email</td>
                                    <td class="text-center">Phone</td>
                                    <td class="text-center">Work At</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $no => $tim)
                                    <tr>
                                        <td class="text-center align-middle"> {{ $no + 1 }} </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light mt-1">
                                                <span class="symbol-label">
                                                    <img src="{{ $tim['tim_pic'] }}" class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $tim['tim_nama'] }}</td>
                                        <td class="align-middle">{{ $tim['tim_posisi'] }}</td>
                                        <td class="align-middle">{{ $tim['tim_email'] }}</td>
                                        <td class="align-middle">{{ $tim['tim_tlp'] }}</td>
                                        <td class="align-middle">{{ $tim['tim_perushaan'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree6">
                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
                <i class="flaticon2-chart"></i>Galery</div>
            </div>
            <div id="collapseThree6" class="collapse" data-parent="#accordionExample6">
                <div class="card-body">
                    <div class="row">
                        @foreach($galery as $glr)
                            <div class="col-md-4">
                                    <!--begin::Card-->
                                <div class="card card-custom overlay">
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper">
                                            <img src="{{ $glr['foto_gambar'] }}" alt="" class="w-100 rounded" />
                                        </div>
                                        <div class="overlay-layer m-5 rounded align-items-end justify-content-start">
                                            <div class="d-flex flex-column align-items-start mb-5 ml-5">
                                                <span class="label label-success label-xl label-inline mb-1">{{ $glr['foto_nama'] }}</span>
                                                <a href="#" class="font-size-h4 font-weight-bolder text-white text-hover-primary">{{ $glr['foto_deskripsi'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card-->
                                <div class="example example-compact mt-2 mb-7"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Accordion-->
</div>

