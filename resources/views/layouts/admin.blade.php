<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('Job/images/logo.png') }}" type="image/x-icon">
    <title>Admin Management</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/admin.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    {{-- Script --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-between" style="display: flex">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </form>
            </ul>
            <div>
                <a href="{{ URL::to('/logout') }}" class="log-out-btn">Đăng xuất</a>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ URL::to('/admin/dashboard') }}" class="brand-link">
            <img src="{{ asset('Job/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background: #fff;">
            <span class="brand-text font-weight-light">QUẢN LÝ HOTJOB</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info" style="color: white;">
                    {{ Auth::user()->name }}
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="{{ URL::to('/admin/dashboard') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            Tổng quan
                        </p>
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/category') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-th"></i>
                            Danh mục
                        </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown-wrap">
                        <a href="javascript:void(0);" class="nav-link nav-link-sidebar" id="nav-dropdown">
                            <p>
                                <i class="nav-icon fas fa-briefcase"></i>
                                Tin tuyển dụng
                            </p>
                        </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="{{ URL::to('/admin/show-job') }}">
                                <i class="nav-icon fas fa-table"></i>
                                Tổng số tin tuyển dụng
                            </a>
                            <a class="dropdown-item" href="{{ URL::to('/admin/add-job') }}">
                                <i class="nav-icon far fa-plus-square"></i>
                                Thêm tin tuyển dụng mới
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/user') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-users"></i>
                            Người dùng
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/show-employer') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-user-friends"></i>
                            Nhà tuyển dụng
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/show-candidate') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-user-tag"></i>
                            Ứng viên
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/show-articles') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-newspaper"></i>
                            Bài báo
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/comments') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-comments"></i>
                            Bình luận
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/show-helps') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-question-circle"></i>
                            Yêu cầu hỗ trợ
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/admin/change-password') }}" class="nav-link nav-link-sidebar">
                        <p>
                            <i class="nav-icon fas fa-unlock-alt"></i>
                            Thay đổi mật khẩu
                        </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">   
            <!-- Main content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    
    <script src="{{ asset('adminLTE/dist/js/main.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
