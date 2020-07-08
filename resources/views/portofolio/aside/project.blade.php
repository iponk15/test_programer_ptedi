<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Projects</h5>
            <!--end::Title-->
            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->
            <!--begin::Search Form-->
            <div class="d-flex align-items-center" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">54 Total</span>
                <form class="ml-5">
                    <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                        <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..." />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <span class="svg-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Search Form-->
            <!--begin::Group Actions-->
            <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                <div class="text-dark-50 font-weight-bold">
                <span id="kt_subheader_group_selected_rows">23</span>Selected:</div>
                <div class="d-flex ml-6">
                    <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                        <button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">Update Status</button>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                            <ul class="navi navi-hover pt-3 pb-4">
                                <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">Change status to:</li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                        <span class="navi-text">
                                            <span class="label label-light-success label-inline font-weight-bold">Approved</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                        <span class="navi-text">
                                            <span class="label label-light-danger label-inline font-weight-bold">Rejected</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                        <span class="navi-text">
                                            <span class="label label-light-warning label-inline font-weight-bold">Pending</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                        <span class="navi-text">
                                            <span class="label label-light-info label-inline font-weight-bold">On Hold</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
                    <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">Delete All</button>
                </div>
            </div>
            <!--end::Group Actions-->
        </div>
        <!--end::Details-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" class=""></a>
            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->

<!--begin::Row-->
<div class="row">
    @foreach($records as $project)
        <div class="col-xl-4">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                            <img src="{{ ( empty($project['thumb']) ? asset('assets/media/project-logos/3.png') : $project['thumb']) }}" alt="image" />
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="d-flex flex-column mr-auto">
                            <!--begin: Title-->
                            <div class="d-flex flex-column mr-auto">
                                <a href="#" class="text-dark text-hover-primary font-size-h6 font-weight-bolder mb-1">{{ $project['project_nama'] }}</a>
                                <span class="text-muted font-weight-bold">{{ $project['project_client'] }}</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar mb-7">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Description-->
                    <div class="mb-2 mt-4 font-weight-bold" style="text-align: justify; text-justify: inter-word;">{{ $project['project_deskripsi'] }}</div>
                    <!--end::Description-->
                    <!--begin::Data-->
                    <div class="d-flex">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center" width="50%">Start</th>
                                        <th scope="col" class="text-center" width="50%">End</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if(empty($project['project_start']) && empty($project['project_end']))
                                            <td class="text-center" colspan="2"><span class="btn btn-light-info btn-sm font-weight-bold btn-upper btn-text" style="width: 100%;">Still under discussion</span></td>
                                        @else
                                            <td class="text-center"><span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text" style="width: 100%;">{{ $project['project_start'] }}</span></td>
                                            <td class="text-center"><span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text" style="width: 100%;">{{ $project['project_end'] }}</span></td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Data-->
                    <!--begin::Progress-->
                    <div class="d-flex align-items-cente">
                        <span class="d-block font-weight-bold mr-5">Progress</span>
                        <div class="d-flex flex-row-fluid align-items-center">
                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                <div class="progress-bar {{ ( $project['Project_progress'] == '0%' ? 'bg-dark' : 'bg-success' ) }}" role="progressbar" style="width: {{ $project['Project_progress'] }};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ml-3 font-weight-bolder">{{ $project['Project_progress'] }}</span>
                        </div>
                    </div>
                    <!--ebd::Progress-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex align-items-center">
                    <a href="{{ route( $route . '_projectDetail' ) }}" class="btn btn-light-success projectDetail" style="width: 100%;" data-toggle="modal" data-target="#staticBackdrop">More Detail ... </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end:: Card-->
        </div>
    @endforeach
</div>
<!--end::Row-->

<!-- Modal-->
<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width: 1300px;">
        <div class="modal-content">
            <!--begin::Card-->
            <div id="projectDetail"></div>
            <!--end::Card-->
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.projectDetail').on('click', function(e){
            e.preventDefault();
            var option = {
                route : $(this).attr('href'),
                blkUi : '#body-content',
                type  : 'ajax',
                html  : true,
                rnder : "#projectDetail"
            }

            ajaxProses('post', option);
        });
    });
</script>