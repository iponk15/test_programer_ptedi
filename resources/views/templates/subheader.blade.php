<div class="label-title" style="display:none;'">{{ ( !empty($pagetitle) ? $pagetitle : 'Others Page' ) }}</div>
<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader"  style="margin-top: -3%;">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline mr-5">
                <!--begin::Page Title-->
                <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">{{ ( !empty($pagetitle) ? $pagetitle : 'Others Page' ) }}</h2>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                    @foreach($breadcrumb as $text => $url)
                        <li class="breadcrumb-item">
                            <a href="{{ $url }}" class="text-muted ajaxify" {!! (empty($url) ? 'style="pointer-events: none;"' : '' ) !!} >{{ $text }}</a>
                        </li>
                    @endforeach
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center"></div>
        <!--end::Toolbar-->
    </div>
</div>