<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Monitor</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/dark-theme.css') }}" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    < @yield('css') </head>

<body>
    <!-- wrapper -->
    <div class="wrapper">

        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="sidebar-header">
                    <div class="d-none d-lg-flex">
                        <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="">
                    </div>
                    <div>
                        <h4 class="d-none d-lg-flex logo-text">Mointor</h4>
                    </div>
                    <a href="javascript:;" class="toggle-btn ms-lg-auto"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="right-topbar ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;"> <i
                                    class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                    </div>
                                    <img src="{{ asset('public/assets/images/avatars/avatar-1.png') }}"
                                        class="user-img" alt="user avatar">
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                @if (Auth::user()->role == '1' || Auth::user()->role == '2')
                                    <a class="dropdown-item" href="{{ url('profile') }}"><i
                                            class="bx bx-user"></i><span>Profile</span></a>
                                @endif

                                <div class="dropdown-divider mb-0"></div> <a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="bx bx-power-off"></i><span>Logout</span></a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->

        <!--navigation-->
        <div class="nav-container">
            <div class="mobile-topbar-header">
                <div class="">
                    <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">Monitor</h4>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <nav class="topbar-nav">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ url('home') }}">
                            <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>
                    @if (Auth::user()->role == '2' || Auth::user()->role == '3')
                        <li>
                            <a href="{{ url('informasi-pertanian') }}">
                                <div class="parent-icon icon-color-1"><i class="bx bx-line-chart"></i>
                                </div>
                                <div class="menu-title">Informasi Pertanian</div>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role == '1')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon icon-color-1"><i class="bx bx-line-chart"></i>
                                </div>
                                <div class="menu-title">Informasi Pertanian</div>
                            </a>
                            <ul>
                                <li> <a href="{{ url('book-jurnal') }}"><i class="bx bx-right-arrow-alt"></i>Book &
                                        Jurnal</a>
                                </li>
                                <li> <a href="{{ url('tanaman') }}"><i class="bx bx-right-arrow-alt"></i>Tanaman</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        <a href="{{ url('sensor-pertanian') }}">
                            <div class="parent-icon icon-color-1"><i class="bx bx-line-chart"></i>
                            </div>
                            <div class="menu-title">Sensor Pertanian</div>
                        </a>
                    </li>

                    @if (Auth::user()->role == '1' || Auth::user()->role == '2')
                        <li>
                            <a href="{{ url('profile') }}">
                                <div class="parent-icon icon-color-1"><i class="bx bx-user"></i>
                                </div>
                                <div class="menu-title">Profile</div>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role == '1')
                        <li>
                            <a href="{{ url('users') }}">
                                <div class="parent-icon icon-color-1"><i class="bx bx-user"></i>
                                </div>
                                <div class="menu-title">Users</div>
                            </a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
        <!--end navigation-->

        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!--end row-->
                    @yield('content')
                    <!--end row-->
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent"
                    target="_blank">codervent</a>
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->

    <!--end switcher-->
    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('public/assets/js/index.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.dashboard-social-list');
        new PerfectScrollbar('.dashboard-top-countries');
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>

    @yield('js')
</body>

</html>
