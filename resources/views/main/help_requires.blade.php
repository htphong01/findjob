@extends('layouts.main')

@section('title')
    Hỗ trợ
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
    <div class="container user-infor">
        <div class="row">
            <div class="col-sm-8">
                <div class="user-infor-title">
                    <span>Gửi hỗ trợ</span>
                </div>
                <h4 class="text-success"> {{ session('success') }}</h4>

                <form action="{{ URL::to('/send-help-require') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label style="font-size: 16px; font-weight: bold">Tiêu đề:</label>
                        <input type="text" id="title" class="form-control" name="title" required style="font-size: 16px;">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 16px; font-weight: bold">Nội dung:</label>
                        <textarea name="content" id="content" class="form-control"
                         cols="30" rows="10" style="font-size: 16px; resize: none"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success" 
                        style="font-size: 16px; font-weight: bold; padding: 4px 16px">Gửi
                    </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise2.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
@endsection