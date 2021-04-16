@extends('layouts.main')

@section('title')
    Quên mật khẩu
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
            <div class="col-md-8">
                <form action="{{ route('update-new-password') }}" method="POST">
                    {{ csrf_field() }}
                    <div style="font-size: 16px;"><b>Nhập địa chỉ email: </b></div>
                    <div class="text-danger" style="font-size: 16px">{{ session('success') }}</div>
                    <input type="email" required style="font-size: 16px; width: 100%; margin-top: 8px;" name="useremail">
                    <input type="submit" style="font-size: 16px; font-weight: bold; padding: 4px 16px; margin-top: 8px; cursor: pointer;" value="Kiểm tra">
                </form>
            </div>
        </div>
    </div>
@endsection