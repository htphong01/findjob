@extends('layouts.main')

@section('title')
    Đăng ký
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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Đăng ký</h2>
                        <h4 class="text-success"> {{ session('success') }}</h4>
                        <form method="POST" class="register-form" id="register-form" action="{{ URL::to('user/registerConfirm') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customer_name" id="name" placeholder="Tên"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="customer_username" id="email" placeholder="Địa chỉ email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="customer_password" id="register_pass" placeholder="Mật khẩu" required/>
                            </div>
                            <div class="form-group" id="re-pass-form">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Nhập lại mật khẩu" required/>
                                <div class="retype text-danger">Mật khẩu không khớp</div>
                            </div>
                            <div class="form-group">
                                <select name="customer_privacy" class="form-control" id="exampleFormControlSelect1" required>
                                  <option value="" selected disabled>Bạn là: </option>
                                  <option value="1">Người tuyển dụng</option>
                                  <option value="2">Người tìm việc làm</option>
                                </select>
                              </div>
                            <div class="form-group term-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>
                                    Tôi hoàn toàn đồng ý với 
                                    <a href="#" class="term-service">Điều khoản dịch vụ & Chính sách bảo mật</a>
                                </label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary" value="Đăng ký"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('UserRegister/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ URL::to('user/login') }}" class="signup-image-link">Đã có tài khoản</a>
                    </div>
                </div>
            </div>
        </section>
    </div>   
@endsection