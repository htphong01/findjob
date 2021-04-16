@extends('layouts.main')

@section('title')
    Thay đổi mật khẩu thành công
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
    <div class="container" style="margin-top: 160px; margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-6">
                <div style="font-size: 16px; margin-bottom: 8px" class="text-success">
                    <b>Thay đổi mật khẩu thành công</b>
                </div>
                <div>
                    <a href="{{ URL::to('/user/login') }}" style="text-decoration: none; font-size: 16px;">Đăng nhập ngay</a>
                </div>
            </div>
        </div>
    </div>
@endsection