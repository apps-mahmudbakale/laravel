<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle">
<i class="hamburger align-self-center"></i>
</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        4 New Notifications
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class="text-muted small mt-1">6h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.1</div>
                                    <div class="text-muted small mt-1">8h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Anna accepted your request.</div>
                                    <div class="text-muted small mt-1">12h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
    <i class="align-middle" data-feather="settings"></i>
  </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
    <img src="{{asset('img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded-circle me-1" alt="{{auth()->user()->firstname." ".auth()->user()->lastname}}" /> <span class="text-dark">{{auth()->user()->firstname." ".auth()->user()->lastname}}</span>
  </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('app.profile', auth()->user()->id)}}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Sign out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>