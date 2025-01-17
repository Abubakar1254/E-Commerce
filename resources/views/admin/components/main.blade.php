<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('/admin/assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('/admin/assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="{{ asset('index') }} " class="logo">
                        <img src="{{ asset('/admin/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                            class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="{{ asset('#dashboard') }}" class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('../demo1/index ') }}">
                                            <span class="sub-item">Dashboard 1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#base') }}">
                                <i class="fas fa-layer-group"></i>
                                <p>Base</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/avatars') }} ">
                                            <span class="sub-item">Avatars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/buttons') }} ">
                                            <span class="sub-item">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/gridsystem') }} ">
                                            <span class="sub-item">Grid System</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/panels') }} ">
                                            <span class="sub-item">Panels</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/notifications') }} ">
                                            <span class="sub-item">Notifications</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/sweetalert') }} ">
                                            <span class="sub-item">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/font-awesome-icons') }} ">
                                            <span class="sub-item">Font Awesome Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/simple-line-icons') }} ">
                                            <span class="sub-item">Simple Line Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/typography') }} ">
                                            <span class="sub-item">Typography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#sidebarLayouts') }}">
                                <i class="fas fa-th-list"></i>
                                <p>Sidebar Layouts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/sidebar-style-2') }} ">
                                            <span class="sub-item">Sidebar Style 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/icon-menu') }} ">
                                            <span class="sub-item">Icon Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#forms') }}">
                                <i class="fas fa-pen-square"></i>
                                <p>Forms</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/forms') }} ">
                                            <span class="sub-item">Basic Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#tables') }}">
                                <i class="fas fa-table"></i>
                                <p>Tables</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/tables') }} ">
                                            <span class="sub-item">Basic Table</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/datatables') }} ">
                                            <span class="sub-item">Datatables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#maps') }}">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Maps</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/googlemaps') }} ">
                                            <span class="sub-item">Google Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/jsvectormap') }} ">
                                            <span class="sub-item">Jsvectormap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#charts') }}">
                                <i class="far fa-chart-bar"></i>
                                <p>Charts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ asset('admin/charts') }} ">
                                            <span class="sub-item">Chart Js</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('admin/sparkline') }} ">
                                            <span class="sub-item">Sparkline</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('admin/widgets') }} ">
                                <i class="fas fa-desktop"></i>
                                <p>Widgets</p>
                                <span class="badge badge-success">4</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="{{ asset('#submenu') }}">
                                <i class="fas fa-bars"></i>
                                <p>Menu Levels</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-bs-toggle="collapse" href="{{ asset('#subnav1') }}">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="{{ asset('#') }}">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ asset('#') }}">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="collapse" href="{{ asset('#subnav2') }}">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav2">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="{{ asset('#') }}">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">
                                            <span class="sub-item">Level 1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="{{ asset('index') }}" class="logo">
                            <img src="{{ asset('/admin/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                                class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="{{ asset('#') }}" role="button" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" id="messageDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="{{ asset('#') }}" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('/admin/assets/img/jm_denis.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block"> How are you ? </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('/admin/assets/img/chadengle.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Chad</span>
                                                        <span class="block"> Ok, Thanks ! </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-img">
                                                        <img
                                                            src="{{ asset('/admin/assets/img/mlane.jpg" alt="Img Profile') }}" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jhon Doe</span>
                                                        <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-img">
                                                        <img
                                                            src="{{ asset('/admin/assets/img/talha.jpg" alt="Img Profile') }}" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Talha</span>
                                                        <span class="block"> Hi, Apa Kabar ? </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="{{ asset('javascript:void(0);') }}">See all
                                            messages<i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" id="notifDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">
                                            You have 4 new notification
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-icon notif-primary">
                                                        <i class="fa fa-user-plus"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> New user registered </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-icon notif-success">
                                                        <i class="fa fa-comment"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('/admin/assets/img/profile2.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="{{ asset('#') }}">
                                                    <div class="notif-icon notif-danger">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> Farrah liked Admin </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="{{ asset('javascript:void(0);') }}">See all
                                            notifications<i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link" data-bs-toggle="dropdown" href="{{ asset('#') }}"
                                    aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                </a>
                                <div class="dropdown-menu quick-actions animated fadeIn">
                                    <div class="quick-actions-header">
                                        <span class="title mb-1">Quick Actions</span>
                                        <span class="subtitle op-7">Shortcuts</span>
                                    </div>
                                    <div class="quick-actions-scroll scrollbar-outer">
                                        <div class="quick-actions-items">
                                            <div class="row m-0">
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-danger rounded-circle">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </div>
                                                        <span class="text">Calendar</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-warning rounded-circle">
                                                            <i class="fas fa-map"></i>
                                                        </div>
                                                        <span class="text">Maps</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-info rounded-circle">
                                                            <i class="fas fa-file-excel"></i>
                                                        </div>
                                                        <span class="text">Reports</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-success rounded-circle">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <span class="text">Emails</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-primary rounded-circle">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </div>
                                                        <span class="text">Invoice</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="{{ asset('#') }}">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-secondary rounded-circle">
                                                            <i class="fas fa-credit-card"></i>
                                                        </div>
                                                        <span class="text">Payments</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown"
                                    href="{{ asset('#') }}" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="{{ asset('/admin/assets/img/profile.jpg') }}" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Hizrian</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="{{ asset('/admin/assets/img/profile.jpg') }}"
                                                        alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p>
                                                    <a href="{{ asset('profile') }} "
                                                        class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ asset('#') }}">My Profile</a>
                                            <a class="dropdown-item" href="{{ asset('#') }}">My Balance</a>
                                            <a class="dropdown-item" href="{{ asset('#') }}">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ asset('#') }}">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ asset('#') }}">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">


                {{--
==========================================================
=================== MAIN CONTENT =========================
==========================================================
--}}
                @yield('main-section')
                {{--
==========================================================
================ MAIN CONTENT END ========================
==========================================================
--}}

                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('http://www.themekita.com') }}">
                                        ThemeKita
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('#') }}"> Help </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('#') }}"> Licenses </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            2024, made with <i class="fa fa-heart heart text-danger"></i> by
                            <a href="{{ asset('http://www.themekita.com') }}">ThemeKita</a>
                        </div>
                        <div>
                            Distributed by
                            <a target="_blank" href="{{ asset('https://themewagon.com/') }}">ThemeWagon</a>.
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Custom template | don't include it in your project! -->
            <div class="custom-template">
                <div class="title">Settings</div>
                <div class="custom-content">
                    <div class="switcher">
                        <div class="switch-block">
                            <h4>Logo Header</h4>
                            <div class="btnSwitch">
                                <button type="button" class="selected changeLogoHeaderColor"
                                    data-color="dark"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                                <button type="button" class="changeLogoHeaderColor"
                                    data-color="light-blue"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                                <br />
                                <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                                <button type="button" class="changeLogoHeaderColor"
                                    data-color="light-blue2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Navbar Header</h4>
                            <div class="btnSwitch">
                                <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                <button type="button" class="changeTopBarColor" data-color="purple"></button>
                                <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                                <button type="button" class="changeTopBarColor" data-color="green"></button>
                                <button type="button" class="changeTopBarColor" data-color="orange"></button>
                                <button type="button" class="changeTopBarColor" data-color="red"></button>
                                <button type="button" class="selected changeTopBarColor"
                                    data-color="white"></button>
                                <br />
                                <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                                <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                                <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                                <button type="button" class="changeTopBarColor" data-color="green2"></button>
                                <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                                <button type="button" class="changeTopBarColor" data-color="red2"></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Sidebar</h4>
                            <div class="btnSwitch">
                                <button type="button" class="changeSideBarColor" data-color="white"></button>
                                <button type="button" class="selected changeSideBarColor"
                                    data-color="dark"></button>
                                <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-toggle">
                    <i class="icon-settings"></i>
                </div>
            </div>
            <!-- End Custom template -->
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('/admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/core/bootstrap.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('/admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- jQuery Sparkline -->
        <script src="{{ asset('/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Chart Circle -->
        <script src="{{ asset('/admin/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Bootstrap Notify -->
        <script src="{{ asset('/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

        <!-- jQuery Vector Maps -->
        <script src="{{ asset('/admin/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/plugin/jsvectormap/world.js') }}"></script>

        <!-- Sweet Alert -->
        <script src="{{ asset('/admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Kaiadmin JS -->
        <script src="{{ asset('/admin/assets/js/kaiadmin.min.js') }}"></script>

        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="{{ asset('/admin/assets/js/setting-demo.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/demo.js') }}"></script>


        <script>
            $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                type: "line",
                height: "70",
                width: "100%",
                lineWidth: "2",
                lineColor: "#177dff",
                fillColor: "rgba(23, 125, 255, 0.14)",
            });

            $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                type: "line",
                height: "70",
                width: "100%",
                lineWidth: "2",
                lineColor: "#f3545d",
                fillColor: "rgba(243, 84, 93, .14)",
            });

            $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                type: "line",
                height: "70",
                width: "100%",
                lineWidth: "2",
                lineColor: "#ffa534",
                fillColor: "rgba(255, 165, 52, .14)",
            });
            </script>
            <script>
            var lineChart = document.getElementById("lineChart").getContext("2d"),
                barChart = document.getElementById("barChart").getContext("2d"),
                pieChart = document.getElementById("pieChart").getContext("2d"),
                doughnutChart = document
                .getElementById("doughnutChart")
                .getContext("2d"),
                radarChart = document.getElementById("radarChart").getContext("2d"),
                bubbleChart = document.getElementById("bubbleChart").getContext("2d"),
                multipleLineChart = document
                .getElementById("multipleLineChart")
                .getContext("2d"),
                multipleBarChart = document
                .getElementById("multipleBarChart")
                .getContext("2d"),
                htmlLegendsChart = document
                .getElementById("htmlLegendsChart")
                .getContext("2d");

            var myLineChart = new Chart(lineChart, {
                type: "line",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                        label: "Active Users",
                        borderColor: "#1d7af3",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#1d7af3",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        borderWidth: 2,
                        data: [
                            542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900,
                        ],
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                        labels: {
                            padding: 10,
                            fontColor: "#1d7af3",
                        },
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest",
                        xPadding: 10,
                        yPadding: 10,
                        caretPadding: 10,
                    },
                    layout: {
                        padding: {
                            left: 15,
                            right: 15,
                            top: 15,
                            bottom: 15
                        },
                    },
                },
            });

            var myBarChart = new Chart(barChart, {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                        label: "Sales",
                        backgroundColor: "rgb(23, 125, 255)",
                        borderColor: "rgb(23, 125, 255)",
                        data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            },
                        }, ],
                    },
                },
            });

            var myPieChart = new Chart(pieChart, {
                type: "pie",
                data: {
                    datasets: [{
                        data: [50, 35, 15],
                        backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
                        borderWidth: 0,
                    }, ],
                    labels: ["New Visitors", "Subscribers", "Active Users"],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                        labels: {
                            fontColor: "rgb(154, 154, 154)",
                            fontSize: 11,
                            usePointStyle: true,
                            padding: 20,
                        },
                    },
                    pieceLabel: {
                        render: "percentage",
                        fontColor: "white",
                        fontSize: 14,
                    },
                    tooltips: false,
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 20,
                            bottom: 20,
                        },
                    },
                },
            });

            var myDoughnutChart = new Chart(doughnutChart, {
                type: "doughnut",
                data: {
                    datasets: [{
                        data: [10, 20, 30],
                        backgroundColor: ["#f3545d", "#fdaf4b", "#1d7af3"],
                    }, ],

                    labels: ["Red", "Yellow", "Blue"],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                    },
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 20,
                            bottom: 20,
                        },
                    },
                },
            });

            var myRadarChart = new Chart(radarChart, {
                type: "radar",
                data: {
                    labels: ["Running", "Swimming", "Eating", "Cycling", "Jumping"],
                    datasets: [{
                            data: [20, 10, 30, 2, 30],
                            borderColor: "#1d7af3",
                            backgroundColor: "rgba(29, 122, 243, 0.25)",
                            pointBackgroundColor: "#1d7af3",
                            pointHoverRadius: 4,
                            pointRadius: 3,
                            label: "Team 1",
                        },
                        {
                            data: [10, 20, 15, 30, 22],
                            borderColor: "#716aca",
                            backgroundColor: "rgba(113, 106, 202, 0.25)",
                            pointBackgroundColor: "#716aca",
                            pointHoverRadius: 4,
                            pointRadius: 3,
                            label: "Team 2",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                    },
                },
            });

            var myBubbleChart = new Chart(bubbleChart, {
                type: "bubble",
                data: {
                    datasets: [{
                            label: "Car",
                            data: [{
                                    x: 25,
                                    y: 17,
                                    r: 25
                                },
                                {
                                    x: 30,
                                    y: 25,
                                    r: 28
                                },
                                {
                                    x: 35,
                                    y: 30,
                                    r: 8
                                },
                            ],
                            backgroundColor: "#716aca",
                        },
                        {
                            label: "Motorcycles",
                            data: [{
                                    x: 10,
                                    y: 17,
                                    r: 20
                                },
                                {
                                    x: 30,
                                    y: 10,
                                    r: 7
                                },
                                {
                                    x: 35,
                                    y: 20,
                                    r: 10
                                },
                            ],
                            backgroundColor: "#1d7af3",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            },
                        }, ],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                            },
                        }, ],
                    },
                },
            });

            var myMultipleLineChart = new Chart(multipleLineChart, {
                type: "line",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                            label: "Python",
                            borderColor: "#1d7af3",
                            pointBorderColor: "#FFF",
                            pointBackgroundColor: "#1d7af3",
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            borderWidth: 2,
                            data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256],
                        },
                        {
                            label: "PHP",
                            borderColor: "#59d05d",
                            pointBorderColor: "#FFF",
                            pointBackgroundColor: "#59d05d",
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            borderWidth: 2,
                            data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87],
                        },
                        {
                            label: "Ruby",
                            borderColor: "#f3545d",
                            pointBorderColor: "#FFF",
                            pointBackgroundColor: "#f3545d",
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            borderWidth: 2,
                            data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194],
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "top",
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest",
                        xPadding: 10,
                        yPadding: 10,
                        caretPadding: 10,
                    },
                    layout: {
                        padding: {
                            left: 15,
                            right: 15,
                            top: 15,
                            bottom: 15
                        },
                    },
                },
            });

            var myMultipleBarChart = new Chart(multipleBarChart, {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                            label: "First time visitors",
                            backgroundColor: "#59d05d",
                            borderColor: "#59d05d",
                            data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
                        },
                        {
                            label: "Visitors",
                            backgroundColor: "#fdaf4b",
                            borderColor: "#fdaf4b",
                            data: [
                                145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312, 356,
                            ],
                        },
                        {
                            label: "Pageview",
                            backgroundColor: "#177dff",
                            borderColor: "#177dff",
                            data: [
                                185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399,
                            ],
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                    },
                    title: {
                        display: true,
                        text: "Traffic Stats",
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false,
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }, ],
                        yAxes: [{
                            stacked: true,
                        }, ],
                    },
                },
            });

            // Chart with HTML Legends

            var gradientStroke = htmlLegendsChart.createLinearGradient(
                500,
                0,
                100,
                0
            );
            gradientStroke.addColorStop(0, "#177dff");
            gradientStroke.addColorStop(1, "#80b6f4");

            var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
            gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
            gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

            var gradientStroke2 = htmlLegendsChart.createLinearGradient(
                500,
                0,
                100,
                0
            );
            gradientStroke2.addColorStop(0, "#f3545d");
            gradientStroke2.addColorStop(1, "#ff8990");

            var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
            gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
            gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

            var gradientStroke3 = htmlLegendsChart.createLinearGradient(
                500,
                0,
                100,
                0
            );
            gradientStroke3.addColorStop(0, "#fdaf4b");
            gradientStroke3.addColorStop(1, "#ffc478");

            var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
            gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
            gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

            var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
                type: "line",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                            label: "Subscribers",
                            borderColor: gradientStroke2,
                            pointBackgroundColor: gradientStroke2,
                            pointRadius: 0,
                            backgroundColor: gradientFill2,
                            legendColor: "#f3545d",
                            fill: true,
                            borderWidth: 1,
                            data: [
                                154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374,
                            ],
                        },
                        {
                            label: "New Visitors",
                            borderColor: gradientStroke3,
                            pointBackgroundColor: gradientStroke3,
                            pointRadius: 0,
                            backgroundColor: gradientFill3,
                            legendColor: "#fdaf4b",
                            fill: true,
                            borderWidth: 1,
                            data: [
                                256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521,
                            ],
                        },
                        {
                            label: "Active Users",
                            borderColor: gradientStroke,
                            pointBackgroundColor: gradientStroke,
                            pointRadius: 0,
                            backgroundColor: gradientFill,
                            legendColor: "#177dff",
                            fill: true,
                            borderWidth: 1,
                            data: [
                                542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900,
                            ],
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest",
                        xPadding: 10,
                        yPadding: 10,
                        caretPadding: 10,
                    },
                    layout: {
                        padding: {
                            left: 15,
                            right: 15,
                            top: 15,
                            bottom: 15
                        },
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "500",
                                beginAtZero: false,
                                maxTicksLimit: 5,
                                padding: 20,
                            },
                            gridLines: {
                                drawTicks: false,
                                display: false,
                            },
                        }, ],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent",
                            },
                            ticks: {
                                padding: 20,
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "500",
                            },
                        }, ],
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('<ul class="' + chart.id + '-legend html-legend">');
                        for (var i = 0; i < chart.data.datasets.length; i++) {
                            text.push(
                                '<li><span style="background-color:' +
                                chart.data.datasets[i].legendColor +
                                '"></span>'
                            );
                            if (chart.data.datasets[i].label) {
                                text.push(chart.data.datasets[i].label);
                            }
                            text.push("</li>");
                        }
                        text.push("</ul>");
                        return text.join("");
                    },
                },
            });

            var myLegendContainer = document.getElementById("myChartLegend");

            // generate HTML legend
            myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

            // bind onClick event to all LI-tags of the legend
            var legendItems = myLegendContainer.getElementsByTagName("li");
            for (var i = 0; i < legendItems.length; i += 1) {
                legendItems[i].addEventListener("click", legendClickCallback, false);
            }
            </script>
            <script>
                $("#displayNotif").on("click", function () {
                  var placementFrom = $("#notify_placement_from option:selected").val();
                  var placementAlign = $("#notify_placement_align option:selected").val();
                  var state = $("#notify_state option:selected").val();
                  var style = $("#notify_style option:selected").val();
                  var content = {};

                  content.message =
                    'Turning standard Bootstrap alerts into "notify" like notifications';
                  content.title = "Bootstrap notify";
                  if (style == "withicon") {
                    content.icon = "fa fa-bell";
                  } else {
                    content.icon = "none";
                  }
                  content.url = "index ";
                  content.target = "_blank";

                  $.notify(content, {
                    type: state,
                    placement: {
                      from: placementFrom,
                      align: placementAlign,
                    },
                    time: 1000,
                    delay: 0,
                  });
                });
              </script>
               <script>
                var iconClass = [
                  "icon-user",
                  "icon-people",
                  "icon-user-female",
                  "icon-user-follow",
                  "icon-user-following",
                  "icon-user-unfollow",
                  "icon-login",
                  "icon-logout",
                  "icon-emotsmile",
                  "icon-phone",
                  "icon-call-end",
                  "icon-call-in",
                  "icon-call-out",
                  "icon-map",
                  "icon-location-pin",
                  "icon-direction",
                  "icon-directions",
                  "icon-compass",
                  "icon-layers",
                  "icon-menu",
                  "icon-list",
                  "icon-options-vertical",
                  "icon-options",
                  "icon-arrow-down",
                  "icon-arrow-left",
                  "icon-arrow-right",
                  "icon-arrow-up",
                  "icon-arrow-up-circle",
                  "icon-arrow-left-circle",
                  "icon-arrow-right-circle",
                  "icon-arrow-down-circle",
                  "icon-check",
                  "icon-clock",
                  "icon-plus",
                  "icon-close",
                  "icon-trophy",
                  "icon-screen-smartphone",
                  "icon-screen-desktop",
                  "icon-plane",
                  "icon-notebook",
                  "icon-mustache",
                  "icon-mouse",
                  "icon-magnet",
                  "icon-energy",
                  "icon-disc",
                  "icon-cursor",
                  "icon-cursor-move",
                  "icon-crop",
                  "icon-chemistry",
                  "icon-speedometer",
                  "icon-shield",
                  "icon-screen-tablet",
                  "icon-magic-wand",
                  "icon-hourglass",
                  "icon-graduation",
                  "icon-ghost",
                  "icon-game-controller",
                  "icon-fire",
                  "icon-eyeglass",
                  "icon-envelope-open",
                  "icon-envelope-letter",
                  "icon-bell",
                  "icon-badge",
                  "icon-anchor",
                  "icon-wallet",
                  "icon-vector",
                  "icon-speech",
                  "icon-puzzle",
                  "icon-printer",
                  "icon-present",
                  "icon-playlist",
                  "icon-pin",
                  "icon-picture",
                  "icon-handbag",
                  "icon-globe-alt",
                  "icon-globe",
                  "icon-folder-alt",
                  "icon-folder",
                  "icon-film",
                  "icon-feed",
                  "icon-drop",
                  "icon-drawer",
                  "icon-docs",
                  "icon-doc",
                  "icon-diamond",
                  "icon-cup",
                  "icon-calculator",
                  "icon-bubbles",
                  "icon-briefcase",
                  "icon-book-open",
                  "icon-basket-loaded",
                  "icon-basket",
                  "icon-bag",
                  "icon-action-undo",
                  "icon-action-redo",
                  "icon-wrench",
                  "icon-umbrella",
                  "icon-trash",
                  "icon-tag",
                  "icon-support",
                  "icon-frame",
                  "icon-size-fullscreen",
                  "icon-size-actual",
                  "icon-shuffle",
                  "icon-share-alt",
                  "icon-share",
                  "icon-rocket",
                  "icon-question",
                  "icon-pie-chart",
                  "icon-pencil",
                  "icon-note",
                  "icon-loop",
                  "icon-home",
                  "icon-grid",
                  "icon-graph",
                  "icon-microphone",
                  "icon-music-tone-alt",
                  "icon-music-tone",
                  "icon-earphones-alt",
                  "icon-earphones",
                  "icon-equalizer",
                  "icon-like",
                  "icon-dislike",
                  "icon-control-start",
                  "icon-control-rewind",
                  "icon-control-play",
                  "icon-control-pause",
                  "icon-control-forward",
                  "icon-control-end",
                  "icon-volume-1",
                  "icon-volume-2",
                  "icon-volume-off",
                  "icon-calendar",
                  "icon-bulb",
                  "icon-chart",
                  "icon-ban",
                  "icon-bubble",
                  "icon-camrecorder",
                  "icon-camera",
                  "icon-cloud-download",
                  "icon-cloud-upload",
                  "icon-envelope",
                  "icon-eye",
                  "icon-flag",
                  "icon-heart",
                  "icon-information",
                  "icon-key",
                  "icon-link",
                  "icon-lock",
                  "icon-lock-open",
                  "icon-magnifier",
                  "icon-magnifier-add",
                  "icon-magnifier-remove",
                  "icon-paper-clip",
                  "icon-paper-plane",
                  "icon-power",
                  "icon-refresh",
                  "icon-reload",
                  "icon-settings",
                  "icon-star",
                  "icon-symbol-female",
                  "icon-symbol-male",
                  "icon-target",
                  "icon-credit-card",
                  "icon-paypal",
                  "icon-social-tumblr",
                  "icon-social-twitter",
                  "icon-social-facebook",
                  "icon-social-instagram",
                  "icon-social-linkedin",
                  "icon-social-pinterest",
                  "icon-social-github",
                  "icon-social-gplus",
                  "icon-social-reddit",
                  "icon-social-skype",
                  "icon-social-dribbble",
                  "icon-social-behance",
                  "icon-social-foursqare",
                  "icon-social-soundcloud",
                  "icon-social-spotify",
                  "icon-social-stumbleupon",
                  "icon-social-youtube",
                  "icon-social-dropbox",
                ];
                var rowDemoIcon = "#row-demo-icon";
                for (i = 0; i < iconClass.length; i++) {
                  $(rowDemoIcon).append(
                    '<div class="col-md-3"> <div class="demo-icon"> <div class="icon-preview"><i class="' +
                      iconClass[i] +
                      '"></i></div> <div class="icon-class">' +
                      iconClass[i] +
                      "</div> </div> </div>"
                  );
                }
              </script>
                  <script>
                    $("#lineChart").sparkline(
                      [
                        102, 109, 120, 99, 110, 80, 87, 74, 102, 109, 120, 99, 110, 80, 87,
                        74,
                      ],
                      {
                        type: "line",
                        height: "100",
                        width: "250",
                        lineWidth: "2",
                        lineColor: "#177dff",
                        fillColor: "rgba(23, 125, 255, 0.2)",
                      }
                    );

                    $("#barChart").sparkline(
                      [
                        102, 109, 120, 99, 110, 80, 87, 74, 102, 109, 120, 99, 110, 80, 87,
                        74,
                      ],
                      {
                        type: "bar",
                        height: "100",
                        barWidth: 9,
                        barSpacing: 10,
                        barColor: "#177dff",
                      }
                    );

                    $("#sparktristateChart").sparkline(
                      [1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1],
                      {
                        type: "tristate",
                        posBarColor: "#35cd3a",
                        negBarColor: "#f3545d",
                        height: "100",
                        barWidth: 9,
                        barSpacing: 10,
                      }
                    );

                    $("#discreteChart").sparkline(
                      [4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 7, 6, 6, 2, 4, 5],
                      {
                        type: "discrete",
                        lineColor: "#177dff",
                        thresholdColor: "#f3545d",
                        thresholdValue: 4,
                        height: "100",
                        width: "150",
                      }
                    );

                    $("#pieChart").sparkline([20, 50, 30], {
                      type: "pie",
                      height: "100",
                    });
                  </script>
                     <script>
                        //== Class definition
                        var SweetAlert2Demo = (function () {
                          //== Demos
                          var initDemos = function () {
                            //== Sweetalert Demo 1
                            $("#alert_demo_1").click(function (e) {
                              swal("Good job!", {
                                buttons: {
                                  confirm: {
                                    className: "btn btn-success",
                                  },
                                },
                              });
                            });

                            //== Sweetalert Demo 2
                            $("#alert_demo_2").click(function (e) {
                              swal("Here's the title!", "...and here's the text!", {
                                buttons: {
                                  confirm: {
                                    className: "btn btn-success",
                                  },
                                },
                              });
                            });

                            //== Sweetalert Demo 3
                            $("#alert_demo_3_1").click(function (e) {
                              swal("Good job!", "You clicked the button!", {
                                icon: "warning",
                                buttons: {
                                  confirm: {
                                    className: "btn btn-warning",
                                  },
                                },
                              });
                            });

                            $("#alert_demo_3_2").click(function (e) {
                              swal("Good job!", "You clicked the button!", {
                                icon: "error",
                                buttons: {
                                  confirm: {
                                    className: "btn btn-danger",
                                  },
                                },
                              });
                            });

                            $("#alert_demo_3_3").click(function (e) {
                              swal("Good job!", "You clicked the button!", {
                                icon: "success",
                                buttons: {
                                  confirm: {
                                    className: "btn btn-success",
                                  },
                                },
                              });
                            });

                            $("#alert_demo_3_4").click(function (e) {
                              swal("Good job!", "You clicked the button!", {
                                icon: "info",
                                buttons: {
                                  confirm: {
                                    className: "btn btn-info",
                                  },
                                },
                              });
                            });

                            //== Sweetalert Demo 4
                            $("#alert_demo_4").click(function (e) {
                              swal({
                                title: "Good job!",
                                text: "You clicked the button!",
                                icon: "success",
                                buttons: {
                                  confirm: {
                                    text: "Confirm Me",
                                    value: true,
                                    visible: true,
                                    className: "btn btn-success",
                                    closeModal: true,
                                  },
                                },
                              });
                            });

                            $("#alert_demo_5").click(function (e) {
                              swal({
                                title: "Input Something",
                                html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                                content: {
                                  element: "input",
                                  attributes: {
                                    placeholder: "Input Something",
                                    type: "text",
                                    id: "input-field",
                                    className: "form-control",
                                  },
                                },
                                buttons: {
                                  cancel: {
                                    visible: true,
                                    className: "btn btn-danger",
                                  },
                                  confirm: {
                                    className: "btn btn-success",
                                  },
                                },
                              }).then(function () {
                                swal("", "You entered : " + $("#input-field").val(), "success");
                              });
                            });

                            $("#alert_demo_6").click(function (e) {
                              swal("This modal will disappear soon!", {
                                buttons: false,
                                timer: 3000,
                              });
                            });

                            $("#alert_demo_7").click(function (e) {
                              swal({
                                title: "Are you sure?",
                                text: "You won't be able to revert this!",
                                type: "warning",
                                buttons: {
                                  confirm: {
                                    text: "Yes, delete it!",
                                    className: "btn btn-success",
                                  },
                                  cancel: {
                                    visible: true,
                                    className: "btn btn-danger",
                                  },
                                },
                              }).then((Delete) => {
                                if (Delete) {
                                  swal({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    type: "success",
                                    buttons: {
                                      confirm: {
                                        className: "btn btn-success",
                                      },
                                    },
                                  });
                                } else {
                                  swal.close();
                                }
                              });
                            });

                            $("#alert_demo_8").click(function (e) {
                              swal({
                                title: "Are you sure?",
                                text: "You won't be able to revert this!",
                                type: "warning",
                                buttons: {
                                  cancel: {
                                    visible: true,
                                    text: "No, cancel!",
                                    className: "btn btn-danger",
                                  },
                                  confirm: {
                                    text: "Yes, delete it!",
                                    className: "btn btn-success",
                                  },
                                },
                              }).then((willDelete) => {
                                if (willDelete) {
                                  swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                    buttons: {
                                      confirm: {
                                        className: "btn btn-success",
                                      },
                                    },
                                  });
                                } else {
                                  swal("Your imaginary file is safe!", {
                                    buttons: {
                                      confirm: {
                                        className: "btn btn-success",
                                      },
                                    },
                                  });
                                }
                              });
                            });
                          };

                          return {
                            //== Init
                            init: function () {
                              initDemos();
                            },
                          };
                        })();

                        //== Class Initialization
                        jQuery(document).ready(function () {
                          SweetAlert2Demo.init();
                        });
                      </script>
                         <script>
                            $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "#177dff",
                                fillColor: "rgba(23, 125, 255, 0.14)",
                            });

                            $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "#f3545d",
                                fillColor: "rgba(243, 84, 93, .14)",
                            });

                            $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "#ffa534",
                                fillColor: "rgba(255, 165, 52, .14)",
                            });

                            $("#lineChart4").sparkline([102, 109, 120, 99, 110, 105, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "rgba(255, 255, 255, .5)",
                                fillColor: "rgba(255, 255, 255, .15)",
                            });

                            $("#lineChart5").sparkline([99, 125, 122, 105, 110, 124, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "rgba(255, 255, 255, .5)",
                                fillColor: "rgba(255, 255, 255, .15)",
                            });

                            $("#lineChart6").sparkline([105, 103, 123, 100, 95, 105, 115], {
                                type: "line",
                                height: "70",
                                width: "100%",
                                lineWidth: "2",
                                lineColor: "rgba(255, 255, 255, .5)",
                                fillColor: "rgba(255, 255, 255, .15)",
                            });
                        </script>


</body>

</html>
