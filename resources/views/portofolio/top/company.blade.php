{{-- begin::Card --}}
<div class="card card-custom card-fit card-border bg-light-success">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-pin text-primary"></i>
            </span>
            <h3 class="card-label">History Company
            <small>My history</small></h3>
        </div>
    </div>
    <div class="card-body pt-2">
        {{-- start card list perusahaan --}}
        @foreach($records as $key => $prsn)
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin::Details-->
                    <div class="d-flex mb-9">
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img src="{{ $prsn['perusahaan_logo'] }}" alt="image" />
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
                                    <a href="" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3 ajaxify">{{ $prsn['perusahaan_nama'] }}</a>
                                    <a href="#">
                                        <i class="flaticon2-correct text-success font-size-h5"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap justify-content-between mt-1">
                                <div class="d-flex flex-column flex-grow-1 pr-8">
                                    <div class="d-flex flex-wrap mb-4">
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-4 mr-5 mb-lg-0 mb-2"><i class="flaticon2-world mr-2 font-size-lg"></i>{{ $prsn['perusahaan_web'] }}</a>
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-4 mr-5 mb-lg-0 mb-2"><i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>{{ $prsn['perusahaan_mainjob'] }}</a>
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold"><i class="flaticon2-placeholder mr-2 font-size-lg"></i>{{ $prsn['perusahaan_lokasi'] }}</a>
                                    </div>
                                    <span class="font-weight-bold text-dark-50">
                                        <div class="row">
                                            <div class="col-md-7" style="text-align: justify"> {{ $prsn['perusahaan_deskripsi'] }} </div>
                                            <div class="col-md-5">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <div class="d-flex align-items-center mr-5">
                                                        <div class="mr-6">
                                                            <div class="font-weight-bold mb-2 text-success">Start Date</div>
                                                            <span class="btn btn-sm btn-text btn-light-success text-uppercase font-weight-bold">{{ $prsn['perusahaan_mulai'] }}</span>
                                                        </div>
                                                        <div class="">
                                                            <div class="font-weight-bold mb-2 text-danger">End Date</div>
                                                            <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{ ( empty($prsn['perusahaan_akhir']) ? 'NOW' : $prsn['perusahaan_akhir'] ) }}</span>
                                                        </div>
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
                    <div class="separator" style="border-bottom: 1px solid sienna;"></div>
                    <!--begin::Items-->
                    <!--begin::Accordion-->
                    <div class="flex-wrap mt-8">
                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample{{ $key + 1 }}">
                            <div class="card">
                                <div class="card-header" id="headingTwo6">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo{{ $key + 1 }}">
                                    <i class="flaticon2-notification"></i>History Position ( Job Description )  </div>
                                </div>
                                <div id="collapseTwo{{ $key + 1 }}" class="collapse" data-parent="#accordionExample{{ $key + 1 }}">
                                    <div class="card-body">
                                        <!--begin::Example-->
                                        <div class="example example-basic">
                                            <div class="example-preview">
                                                @if(empty($prsn['perusahaan_jobdesc']))
                                                    <div class="alert alert-custom alert-notice alert-light-info fade show" role="alert">
                                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                        <div class="alert-text">History is empty !</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="timeline timeline-justified timeline-4">
                                                        <div class="timeline-bar"></div>
                                                        <div class="timeline-items">
                                                            @foreach($prsn['perusahaan_jobdesc'] as $valueJob)
                                                                <div class="timeline-item">
                                                                    <div class="timeline-badge">
                                                                        <div class="bg-success"></div>
                                                                    </div>
                                                                    <div class="timeline-label text-primary">
                                                                        <!-- <span class="text-primary font-weight-bold">{{ $valueJob['jobdesc_nama'] }} {{ $valueJob['jobdesc_mulai'] . ' sd ' . $valueJob['jobdesc_end'] }}</span> -->
                                                                        <span class="label label-lg label-dark label-inline font-weight-bold">{{ $valueJob['jobdesc_nama'] }}</span>
                                                                        <span class="label label-lg label-success label-inline font-weight-bold">{!! $valueJob['jobdesc_mulai'] . ' sd &nbsp;' . (empty($valueJob['jobdesc_end']) ? '<span class="text-danger"> NOW</span>' : $valueJob['jobdesc_end']) !!}</span>
                                                                    </div>
                                                                    <div class="timeline-content" style="text-align: justify">{!! $valueJob['jobdesc_deskripsi'] !!}</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!--end::Example-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Accordion-->
                </div>
            </div>
        @endforeach
        {{-- start card list perusahaan --}}
    </div>
</div>
{{--end::Card--}}