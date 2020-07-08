@extends('templates.content')
@section('content')
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <!--begin::Details-->
            <div class="d-flex mb-9">
                <!--begin: Pic-->
                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                    <div class="symbol symbol-50 symbol-lg-120">
                        <img src="{{ asset('assets/media/users/irfan.jpeg') }}" alt="image" />
                    </div>
                    <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                        <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between flex-wrap mt-1">
                        <div class="d-flex mr-3">
                            <a href="{{ route( $route . '_index') }}" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3 ajaxify">Irfan Isma Somantri</a>
                            <a href="#">
                                <i class="flaticon2-correct text-success font-size-h5"></i>
                            </a>
                        </div>
                        <!-- <div class="my-lg-0 my-3">
                            <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">ask</a>
                            <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">hire</a>
                        </div> -->
                    </div>
                    <!--end::Title-->
                    <!--begin::Content-->
                    <div class="d-flex flex-wrap justify-content-between mt-1">
                        <div class="d-flex flex-column flex-grow-1 pr-8">
                            <div class="d-flex flex-wrap mb-4">
                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-4 mr-5 mb-lg-0 mb-2"><i class="flaticon2-new-email mr-2 font-size-lg"></i>irfan@cendana2000.co.id</a>
                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-4 mr-5 mb-lg-0 mb-2"><i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>PIC / CO PM</a>
                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold"><i class="flaticon2-placeholder mr-2 font-size-lg"></i>Depok, PLN Gandul Cinere</a>
                            </div>
                            <span class="font-weight-bold text-dark-50">
                                <div class="row">
                                    <div class="col-md-7" style="text-align: justify">
                                        I'm enginering developer at PT Cendana Teknika Utama. My hoby play game, learn coding try practice and others smell program language. Focus, Respect, Openness, Courage and Comitment
                                    </div>
                                    <div class="col-md-5">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="d-flex align-items-center mr-5">
                                                <div class="mr-6">
                                                    <div class="font-weight-bold mb-2">Start Date</div>
                                                    <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">13 April, 2014</span>
                                                </div>
                                                <div class="">
                                                    <div class="font-weight-bold mb-2">Due Date</div>
                                                    <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">Now</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0" style="max-width: 50%;">
                                                <span class="font-weight-bold">Active since 5 years ago</span>
                                                <div class="progress progress-xs mt-2 mb-2">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="font-weight-bolder text-dark"> <a href="http://www.cendana2000.co.id/" target="_blank" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"> PT Cendana Teknika Utama </a></span>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
            <div class="separator separator-solid"></div>
            <!--begin::Items-->
            <div class="d-flex align-items-center flex-wrap mt-8">
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    <span class="mr-4">
                        <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Salary</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">Rp. </span>-</span>
                    </div>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    <span class="mr-4">
                        <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Project</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold"></span>30</span>
                    </div>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    <span class="mr-4">
                        <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Client</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold"></span>4</span>
                    </div>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    <span class="mr-4">
                        <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column">
                        <span class="text-dark-75 font-weight-bolder font-size-sm">2 Company</span>
                        <a href="{{ route( $route . '_company' ) }}" class="text-primary font-weight-bolder viewCompany" data-toggle="modal" data-target="#viewCompany">View</a>
                    </div>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    <span class="mr-4">
                        <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column">
                        <span class="text-dark-75 font-weight-bolder font-size-sm">Education</span>
                        <a href="{{ route( $route . '_education' ) }}" class="text-primary font-weight-bolder viewEducation" data-toggle="modal" data-target="#viewEducation">View</a>
                    </div>
                </div>
                <!--end::Item-->
            </div>
            <!--begin::Items-->
        </div>
    </div>
    <!--end::Card-->

    <!--begin::Profile Overview-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-200px w-xl-230px" id="kt_profile_aside">
            <!--begin::Profile Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::Nav-->
                    <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                        <div class="navi-item mb-2">
                            <a href="{{ route( $route . '_profile' ) }}" class="navi-link py-4 routeAside">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">Profile</span>
                            </a>
                        </div>
                        <div class="navi-item mb-2">
                            <a href="{{ route( $route . '_skill' ) }}" class="navi-link py-4 routeAside">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">Skills</span>
                            </a>
                        </div>
                        <div class="navi-item mb-2">
                            <a href="{{ route( $route . '_project' ) }}" class="navi-link py-4 routeAside">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                                <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">Project</span>
                            </a>
                        </div>
                        <div class="navi-item mb-2">
                            <a href="{{ route( $route . '_cv' ) }}" class="navi-link py-4 routeAside">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">CV</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Profile Card-->
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div id="cardContent">
                        <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                            <div class="alert-icon"><i class="flaticon-info"></i></div>
                            <div class="alert-text">Click aside menu for more detail.</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- start modal view company --}}
    <div class="modal fade" id="viewCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="max-width: 850px;">
            <div class="modal-content">
                <div id="contetnCompany"></div>
            </div>
        </div>
    </div>
    {{-- end modal view company --}}

    {{-- start modal view company --}}
    <div class="modal fade" id="viewEducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div id="contetnEducation"></div>
            </div>
        </div>
    </div>
    {{-- end modal view company --}}

    <script>
        $(document).ready(function(){
            $('.routeAside').on('click', function(e){
                e.preventDefault();

                KTApp.block('#cardContent', {
                    overlayColor: '#000000',
                    type: 'v2',
                    state: 'success',
                    message: 'Please wait...'
                });

                var route = $(this).attr('href');
                $("#cardContent").load(route);

                setTimeout(function() {
                    KTApp.unblock('#cardContent');
                }, 1000);

                var mnCls = $(this).attr('class');
                if(mnCls.includes('navi-link')){
                    $('a').removeClass('active');
                    $(this).addClass('active');
                }
            });

            $('.viewCompany').on('click', function(e){
                e.preventDefault();
                var option = {
                    route : $(this).attr('href'),
                    blkUi : '#body-content',
                    type  : 'ajax',
                    html  : true,
                    rnder : "#contetnCompany"
                }

                ajaxProses('post', option);
            });

            $('.viewEducation').on('click', function(e){
                e.preventDefault();
                var option = {
                    route : $(this).attr('href'),
                    blkUi : '#body-content',
                    type  : 'ajax',
                    html  : true,
                    rnder : "#contetnEducation"
                }

                ajaxProses('post', option);
            });
        });
    </script>
@endsection