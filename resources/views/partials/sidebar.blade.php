<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('app.dashboard')}}">
            <img src="{{ asset('img/logo-white.png') }}" alt="" width="220px">
        </a>
        <ul class="sidebar-nav">
            <div class="dropdown-divider"></div>
            <li class="sidebar-item {{ request()->routeIs('app.dashboard') ? 'active' : '' }}">
                <a  href="{{route('app.dashboard')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('app.users.*') ? 'active' : '' }}">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('app.users.*') ? 'show' : '' }} " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.roles.index')}}">Roles</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.users.index')}}">Users</a></li>
                </ul>
            </li>
            <li class="sidebar-item {{ request()->routeIs('app.dashboard') ? 'active' : '' }}">
                <a  href="{{route('app.dashboard')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Market</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
