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
                <div style="font-size: 16px; margin-bottom: 8px">
                    Chúng tôi đã gửi một đoạn mã gồm 6 chữ số tới địa chỉ email <b>{{ $email }}</b>.<br>
                    Vui lòng kiểm tra email và điền đoạn mã vào dưới đây:
                </div>
                <form action="{{ URL::to('/confirm-code-forgot/' .$id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="text-danger" style="font-size: 16px;">{{ session('error') }}</div>
                    <input type="number" name="confirm_code" style="font-size: 16px;"><br>
                    <input type="submit" style="font-size: 16px; font-weight: bold; padding: 4px 16px; margin-top: 8px; cursor: pointer;"  value="Xác nhận">
                </form>
            </div>
        </div>
    </div>
@endsection