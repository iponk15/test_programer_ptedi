<!-- <script src="{{ asset('assets/js/scripts.bundle_cust.js') }}"></script> -->
<span class="tab-tittle" value="{{ $pagetitle }}"><span>
@if(!empty(@$breadcrumb) || @$breadcrumb != NULL || @$breadcrumb != '' || @$breadcrumb != FALSE)
    @include('templates.subheader')
@endif
<div class="d-flex flex-column-fluid">
    <div class="container">
        @yield('fullcontent')
    </div>
</div>