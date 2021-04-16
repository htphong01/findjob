@extends('layouts.main')

@section('title')
    Đăng nhập
@endsection

@section('categories')
    <option value="" selected disabled>Chọn ngành nghề</option>
    @foreach ($categories as $cate)
        <option value="{{ $cate->category_id }}"> {{ $cate->category_name }}</option>
    @endforeach
@endsection

@section('cities')
    <option value="0" selected>Tất cả địa điểm</option>
    @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
    @endforeach
@endsection

@section('content')
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('UserRegister/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ URL::to('user/register') }}" class="signup-image-link">Tạo tài khoản mới</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Đăng nhập</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ URL::to('/user/home') }}">
                            {{ csrf_field() }}
                            <h3 class="text-danger">{{ session('noti') }}</h3>
                            <?php Session::put('noti', ''); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customer_username" id="your_name" placeholder="Tài khoản"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="customer_password" id="your_pass" placeholder="Mật khẩu"/>
                            </div>
                            <div class="form-group check-term">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Nhớ mật khẩu</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit btn btn-primary" value="Đăng nhập"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label" style="font-weight: bold">Hoặc đăng nhập với</span>
                            <ul class="socials">
                                <li style="width: 100%">
                                    <a href="#" 
                                    style="display: flex; background: #fff;
                                     align-items: center; text-decoration: none;
                                     box-shadow: 0.4px 0.4px 1px 1px #ccc; padding: 4px 8px;
                                     border: 1px solid #ccc">
                                        <i class="display-flex-center zmdi zmdi-google"></i>
                                        <span style="font-size: 16px; color: rgb(59, 59, 59); font-weight: bold">Đăng nhập với Google</span>
                                    </a>
                                </li>
                            </ul>
                            <div style="display: none" class="register-mobile">
                                <a href="{{ URL::to('user/register') }}" class="signup-image-link">Tạo tài khoản mới</a>
                            </div>
                        </div>
                        <div class="text-center" style="font-size: 16px">
                            <a href="{{ route('forgot-password') }}">Quên mật khẩu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection