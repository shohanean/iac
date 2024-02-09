<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="@yield('dashboard') nav-item">
            <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="fa-solid fa-gauge"></i>
                <span class="menu-title text-truncate" data-i18n="Leaflet Maps">Dashboard</span>
            </a>
        </li>
        <li class=" navigation-header"><span>Frontend Menus</span>
            <i data-feather="more-horizontal"></i>
        </li>
        <li class="nav-item">
            <a class="d-flex align-items-center" href="#">
                <i class="fa-regular fa-images"></i>
                <span class="menu-title text-truncate" data-i18n="Charts">Banner</span>
            </a>
            <ul class="menu-content">
                <li class="@yield('banner.create')"><a class="d-flex align-items-center"
                        href="{{ route('banner.create') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Chartjs">Add
                            Banner</span></a>
                </li>
                <li class="@yield('banner.index')"><a class="d-flex align-items-center" href="{{ route('banner.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Apex">All
                            Banner</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="d-flex align-items-center" href="#">
                <i class="fa-regular fa-circle-question"></i>
                <span class="menu-title text-truncate" data-i18n="Charts">FAQ</span>
            </a>
            <ul class="menu-content">
                <li class="@yield('faq.create')"><a class="d-flex align-items-center" href="{{ route('faq.create') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Chartjs">Add
                            FAQ</span></a>
                </li>
                <li class="@yield('faq.index')"><a class="d-flex align-items-center" href="{{ route('faq.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Apex">All
                            FAQ</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="d-flex align-items-center" href="#">
                <i class="fa-solid fa-blog"></i>
                <span class="menu-title text-truncate" data-i18n="Charts">Blog</span>
            </a>
            <ul class="menu-content">
                <li class="@yield('blog.create')"><a class="d-flex align-items-center" href="{{ route('blog.create') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Chartjs">Add
                            Blog</span></a>
                </li>
                <li class="@yield('blog.index')"><a class="d-flex align-items-center" href="{{ route('blog.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Apex">All
                            Blog</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span
                    class="menu-title text-truncate" data-i18n="Charts">Reserved</span><span
                    class="badge badge-light-danger rounded-pill ms-auto me-2">2</span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="chart-apex.html"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Apex">Apex</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="d-flex align-items-center" href="{{ route('home') }}" target="_blank">
                <i class="fa fa-globe"></i>
                <span class="menu-title text-truncate" data-i18n="Leaflet Maps">Visit Website</span>
            </a>
        </li>
    </ul>
</div>
