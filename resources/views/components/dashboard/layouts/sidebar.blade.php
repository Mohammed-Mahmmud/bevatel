<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('mainDashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/logo-light.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('dashboard/assets/images/logo-light.png') }}" alt="" height="30px">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav" style="font-weight: bold;">
                <li class="menu-title"><span data-key="t-menu">{{ trans('Dashboard/sidebar.Menu') }}</span></li>
                @foreach ($parent as $item)
                    <x-dashboard.layouts.sidebar-items :item="$item" />
                @endforeach
            </ul>
        </div>
    </div>
</div>
