<!-- navigation -->
<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="index.html">
                <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="row navbar-brand order-1">
                <nav>
                    @if (!is_logged())
                        <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
                    @endif

                    @if (is_logged())
                        <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
                    @endif
                </nav>
            </div>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('')}}">Trang chủ</a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('list')}}">Sản phẩm</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}">Liên hệ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin')}}">Admin</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <select class="m-2 border-0 bg-transparent" id="select-language">
                    <option id="en" value="" selected>En</option>
                    <option id="fr" value="">Fr</option>
                </select>

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>
<!-- /navigation -->