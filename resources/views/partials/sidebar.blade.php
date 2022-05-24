<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/dashboard">
            <img src="{{ asset('img/logo-white.png') }}" alt="" width="220px">
        </a>
        <ul class="sidebar-nav">
            <div class="dropdown-divider"></div>
            <li class="sidebar-item active">
                <a  href="{{route('dashboard')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Roles</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Users</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
