@extends('layouts.main')

@section('title')
    Cập nhật mật khẩu mới
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
                <div style="font-size: 16px; margin-bottom: 8px">
                    <b>Thiết lập mật khẩu mới</b>
                </div>
                <form action="{{ URL::to('/forgot-password-update/' .$id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="password" id="forgot-password" name="forgot_password" 
                    style="width: 100%; font-size: 16px; margin-bottom: 8px;" placeholder="Mật khẩu mới" required>
                    <input type="password" id="forgot-repassword"  
                    style="width: 100%; font-size: 16px"  placeholder="Nhập lại mật khẩu mới" required>
                    <div class="text-danger forgot-password-error">Mật khẩu không trùng khớp</div>
                    <input type="submit" id="forgot-btn" style="font-size: 16px; font-weight: bold; padding: 4px 16px; margin-top: 8px; cursor: pointer;" value="Xác nhận">
                </form>
            </div>
        </div>
    </div>
@endsection