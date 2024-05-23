<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
            <img src="{{ asset('assets/landing') }}/img/brand/blue.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{ asset('assets/landing') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item {{ request()->routeIs('landing.home') ? 'active' : '' }}">
                    <a href="{{ route('landing.home') }}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Home</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('landing.reservation') ? 'active' : '' }}">
                    <a href="{{ route('landing.reservation') }}" class="nav-link" role="button">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Reservation Form</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="{{ route('login') }}" target="_blank">
                        <span class="btn-inner--icon">
                            <i class="fa fa-sign-in"></i>
                        </span>
                        <span class="nav-link-inner--text">Login</span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a href="{{ route('admin.login') }}" target="_blank" class="btn btn-primary btn-icon">
                        <span class="btn-inner--icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="nav-link-inner--text">Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
