<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <img src="assets/img/logo-img.png" alt="">
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('show_dashboard')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bank"></use>
                </svg> Dashboard<span class="badge badge-info"></span></a></li>
        <li class="c-sidebar-nav-title">TOUR MANAGEMENT</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('show_list_tours')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bank"></use>
                </svg> Tours<span class="badge badge-info"></span></a></li>
        <li class="c-sidebar-nav-title">NEWS MANAGEMENT</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('show_list_news')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bank"></use>
                </svg> News<span class="badge badge-info"></span></a></li>
        <li class="c-sidebar-nav-title">OTHERS</li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-group"></use>
                </svg> Customers</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="listcustomers.html">List customers</a></li>

            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-wallet"></use>
                </svg>Promotions</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href=""><span class="c-sidebar-nav-icon"></span> List Promotions</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href=""><span class="c-sidebar-nav-icon"></span> Add Promotions</a></li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
