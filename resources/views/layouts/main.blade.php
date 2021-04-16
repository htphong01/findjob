<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('Job/images/logo.png') }}" type="image/x-icon">
    <title>@yield('title') | HOTJOB</title>
    {{-- <link rel="shortcut icon" type="image/x-icon" href="images/logo.png"/> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('UserRegister/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="{{ asset('UserRegister/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/career_details.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/user_infor.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/new_job.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/changeNumber.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/employerAddJob.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/suitable_jobs.css') }}">
    <link rel="stylesheet" href="{{ asset('Job/css/responsive.css') }}">
    
    
    {{-- Script --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

</head>

<body>
    
    <div class="app_header">
        <div class="navbar-wrap">
            <nav class="navbar container">
                <div class="nav-left">
                    <a href="{{ URL::to('/') }}" class="logo__link">
                        {{-- <span>HOTJOB</span> --}}
                        <img src="{{ asset('Job/images/logofinal.png') }}" alt="" style="width: 100%; height: auto;">
                    </a>
                </div>
    
                <ul class="nav-right">
                    <li class="nav-item">
                        <a href="{{ URL::to('/new-job') }}" class="nav-item__link">Công việc mới</a>
                        <span class="underline"></span>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/articles') }}" class="nav-item__link">Cẩm nang</a>
                        <span class="underline"></span>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/category/statistic') }}" class="nav-item__link">Thống kê</a>
                        <span class="underline"></span>
                    </li>
                    <li class="nav-item">
                        <a href="https://vietcv.io/templates" target="_blank" class="nav-item__link">Mẫu CV</a>
                        <span class="underline"></span>
                    </li>
                    <li class="nav-item">
                        @if (Auth::check())
                            @if (Auth::user()->privacy == 0)
                                <a class="nav-item__link item-customer-link" href="{{ URL::to('/admin/dashboard') }}" id="login-icon">
                            @else
                                <a class="nav-item__link item-customer-link" href="{{ URL::to('user/information/' .Auth::user()->id) }}" id="login-icon">
                            @endif
                        @else
                            <a class="nav-item__link item-customer-link" 
                            href="{{ URL::to('user/login') }}" id="login-icon">
                        @endif
                            @if (Auth::check())
                                <div class="customer_name">{{ Auth::user()->name }}</div>
                            @else
                                <button>Đăng nhập</button>
                            @endif
                            <span class="underline"></span>
                        </a>
                        @if (Auth::check())
                            <div class="customer-more">
                                @if (Auth::user()->privacy == 0)
                                    <div class="customer-item">
                                        <a href="{{ URL::to('/admin/dashboard') }}" class="customer-item__link" style="border-bottom: 1px solid #ddd;">Trang cá nhân</a>
                                    </div>
                                    
                                @else
                                    <div class="customer-item">
                                        <a href="{{ URL::to('/user/information/' .Auth::user()->id) }}" class="customer-item__link" style="border-bottom: 1px solid #ddd;">Trang cá nhân</a>
                                    </div>
                                @endif
                                <div class="customer-item">
                                    <a href="{{ URL::to('/user/logout') }}" class="customer-item__link">Đăng xuất</a>
                                </div>
                            </div>
                        @endif
                    </li>
                </ul>
                <div class="bar-icon">
                    <div class="bar1 bar"></div>
                    <div class="bar2 bar"></div>
                    <div class="bar3 bar"></div>
                </div>

                <div class="mobile-menu">
                    <div class="mobile-menu-item">
                        <form action="{{ URL::to('/search') }}" method="GET" class="search-form-mobile">
                            <input type="text" class="search-mobile-input" name="filter_jobName">
                        </form>
                    </div>

                    @if (Auth::check())
                        <div class="mobile-menu-item">
                            <a href="{{ URL::to('/user/information/' .Auth::user()->id ) }}" class="nav-item__link" >
                                {{ Auth::user()->name }}
                            </a>
                        </div>
                    @endif

                    <div class="mobile-menu-item">
                        <a href="{{ URL::to('/') }}" class="nav-item__link">Trang chủ</a>
                    </div>
                    <div class="mobile-menu-item">
                        <a href="{{ URL::to('/new-job') }}" class="nav-item__link">Công việc mới</a>
                    </div>
                    <div class="mobile-menu-item">
                        <a href="{{ URL::to('/articles') }}" class="nav-item__link">Cẩm nang</a>
                    </div>           
                    <div class="mobile-menu-item">
                        <a href="{{ URL::to('/category/statistic') }}" class="nav-item__link">Thống kê</a>
                    </div>
                    <div class="mobile-menu-item">
                        <a href="https://vietcv.io/templates" target="_blank" class="nav-item__link">Mẫu CV</a>
                    </div>
                    <div class="mobile-menu-item">
                        @if (Auth::check())
                            <a href="{{ URL::to('/user/logout') }}" class="nav-item__link" >Đăng xuất</a>
                        @else
                            <a class="nav-item__link item-customer-link" 
                            href="{{ URL::to('user/login') }}" id="login-icon">
                                <button>Đăng nhập</button>                            
                                <span class="underline"></span>
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
            
        </div>
        <div class=" container header-search-wrap">
            <div class="row header-search">
                <form action="{{ URL::to('/search') }}" class="d-flex" style="width: 100%" method="GET">
                    <div class="form-group col-sm-5 col-xs-12 input-data">
                        <span class="input-icon"><i class="icons8-zoom"></i></span>
                        <input class="form-control input-search ui-autocomplete-input" 
                        placeholder="Tên công việc, vị trí bạn muốn ứng tuyển ..." 
                        id="keyword" autocomplete="off" name="filter_jobName">
                    </div>
                    <div class="form-group col-sm-3 hidden-xs input-data no-padding">
                        <span class="input-icon-select2"><i class="icons8-map-pin"></i></span>
                        <select class="form-control input-select2" id="city" style="width: 100%" 
                        name="filter_city">
                            @yield('cities')
                        </select>
                    </div>
                    <div class="form-group col-sm-3 hidden-xs input-data no-padding">
                        <span class="input-icon-select2"><i class="icons8-tool-symbol"></i></span>
                        <select class="form-control input-select2" id="category" style="width: 100%" 
                        name="filter_category">
                            @yield('categories')
                        </select>
                    </div>
                    <div class="form-group col-sm-1 hidden-xs input-data no-padding">
                        <button class="btn btn-default" style="height: 100%; padding: 0 16px; font-size: 16px" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        @yield('content')
    </div>

    <div class="app-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-title">TỔNG QUAN</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{ URL::to('/new-job') }}" class="footer-item-link">Công việc mới</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ URL::to('/articles') }}" class="footer-item-link">Cẩm nang</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ URL::to('/category/statistic') }}" class="footer-item-link">Thống kê</a>
                        </li>
                        <li class="footer-item">
                            <a href="https://vietcv.io/templates" class="footer-item-link">Mẫu CV</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">VỀ CHÚNG TÔI</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{ URL::to('/help') }}" class="footer-item-link">Liên hệ</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ URL::to('/') }}" class="footer-item-link">Giới thiệu</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Điều khoản sử dụng</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Chính sách bảo mật</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Các câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <div class="footer-title">THÔNG TIN LIÊN LẠC</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <i class="fa fa-home"></i>
                            Phường Hòa Hải, Quận Ngũ Hành Sơn, Đà Nẵng
                        </li>
                        <li class="footer-item">
                            <i class="fa fa-phone"></i>
                            0123456789
                        </li>
                        <li class="footer-item">
                            <i class="fa fa-fax"></i>
                            0123456789
                        </li>
                        <li class="footer-item">
                            <i class="far fa-envelope"></i>
                            cty.hotjob2020@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <div class="footer-title">THEO DÕI</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="fab fa-facebook-square mr-1"></i>
                                Facebook
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="fab fa-twitter-square"></i>
                                Twitter
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="fab fa-instagram-square"></i>
                                Instagram
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="fab fa-telegram"></i>
                                Telegram
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="fab fa-google-plus-g"></i>
                                Google
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="footer-copy-right">
                    <i class="far fa-registered"></i>
                    Copy-right by Hot Job 6/2020
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    
    <script src="{{ asset('Job/js/main.js') }}"></script>
    <script src="{{ asset('UserRegister/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('UserRegister/js/main.js') }}"></script>
    
</body>
</html>