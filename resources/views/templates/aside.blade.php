<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item" aria-haspopup="true">
                <a href="{{ route('home') }}" class="menu-link ajaxify">
                    <span class="svg-icon menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">Home</span>
                </a>
            </li>
            @if(Auth::user()->role == 2)
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('entrybiodata.index') }}" class="menu-link ajaxify">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M17,20 L17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 L7,20 L5,20 C3.8954305,20 3,19.1045695 3,18 L3,6 C3,4.8954305 3.8954305,4 5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,18 C21,19.1045695 20.1045695,20 19,20 L17,20 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M12.9717525,11.7005668 C12.8097937,13.3201542 12.3239175,14.1866868 11.5141238,14.3001646 C11.5141238,14.3001646 12.2429381,11.4576287 11.2711857,10 C11.2711857,10 11.1681401,11.5618236 10.126941,13.4359819 C9.63887975,14.3144921 9.08474261,14.9067082 9.08474261,16.0734529 C9.08474261,17.7393714 10.7908674,18.6003292 12.002779,18.6003292 C13.2146906,18.6003292 14.9152574,18.0172577 14.9152574,15.9765075 C14.9152574,15.1373628 14.2674224,13.7120493 12.9717525,11.7005668 Z" fill="#000000"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Entry Biodata</span>
                    </a>
                </li>
            @else
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('masterdata.manageusers.user.index') }}" class="menu-link ajaxify">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M17,20 L17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 L7,20 L5,20 C3.8954305,20 3,19.1045695 3,18 L3,6 C3,4.8954305 3.8954305,4 5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,18 C21,19.1045695 20.1045695,20 19,20 L17,20 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M12.9717525,11.7005668 C12.8097937,13.3201542 12.3239175,14.1866868 11.5141238,14.3001646 C11.5141238,14.3001646 12.2429381,11.4576287 11.2711857,10 C11.2711857,10 11.1681401,11.5618236 10.126941,13.4359819 C9.63887975,14.3144921 9.08474261,14.9067082 9.08474261,16.0734529 C9.08474261,17.7393714 10.7908674,18.6003292 12.002779,18.6003292 C13.2146906,18.6003292 14.9152574,18.0172577 14.9152574,15.9765075 C14.9152574,15.1373628 14.2674224,13.7120493 12.9717525,11.7005668 Z" fill="#000000"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">List User</span>
                    </a>
                </li>
            @endif
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->