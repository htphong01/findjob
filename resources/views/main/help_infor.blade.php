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
                    <span>Hỗ trợ</span>
                </div>
                <div style="font-size: 16px; font-weight: bold">Tiêu đề:</div>
                <div style="font-size: 16px; padding: 4px ;border: 1px solid #ddd; 
                border-radius: 5px; margin-bottom: 16px">{{ $help->title }}</div>
                <div style="font-size: 16px; font-weight: bold">Nội dung:</div>
                <div style="font-size: 16px; padding: 4px;
                border: 1px solid #ddd; border-radius: 5px; margin-bottom: 16px">{{ $help->content }}</div>
                <div style="font-size: 16px; font-weight: bold">Phản hồi:</div>
                <div style="font-size: 16px; padding: 4px ;
                border: 1px solid #ddd; border-radius: 5px; margin-bottom: 16px">
                    @if ($help->status == 0)
                        Hiện chưa có phản hồi
                    @else
                        {!! $help->reply !!}
                    @endif
                </div>
            </div>
            <div class="col-sm-4" style="margin-top: 32px">
                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise3.jpg') }}" alt="" style="width: 100%">
                </div>
                
            </div>
        </div>
    </div>
@endsection