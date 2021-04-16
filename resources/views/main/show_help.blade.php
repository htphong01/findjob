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
               @foreach ($helps as $help)
                    <div class="new-job-item help-item">
                        <div class="new-job-name">
                            <a href="{{ URL::to('/help-infor/' .$help->id) }}" class="new-job-name__link">{{ $help->title }}</a>
                        </div>
                        <div class="new-job-deadline">
                            Ngày gữi:
                            {{ $help->created_at->format("d.m.Y") }} 
                        </div>
                        <div class="new-job-deadline">
                            Tình trạng:
                            @if ($help->status == 0)
                                <i>Chưa xử lý</i>
                            @else
                                Đã xử lý
                            @endif 
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4 hide-on-mobile" style="margin-top: 32px">
                <div>
                    <button class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px">
                        <a href="{{ URL::to('/send-help') }}" style="color: #fff; text-decoration: none">Gửi hỗ trợ</a>
                    </button>
                </div>
                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise2.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
@endsection