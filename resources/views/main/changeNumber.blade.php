@extends('layouts.main')

@section('title')
    Thay đổi số điện thoại
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
   <div class="container changeNumber-main">
        <div class="row">
            <div class="col-sm-8">
                <div class="changeNumber-title">
                    <span>Đổi số điện thoại</span>
                </div>
                <h4 class="text-success"> {{ session('success') }}</h4>
                <div class="changeNumber-item">
                    <div class="changeNumber-old">
                        @if ($customer->phoneNumber)
                            Số điện thoại cũ: <b>{{ $customer->phoneNumber }}</b>
                        @else
                            Bạn hiện chưa có số điện thoại.
                        @endif
                    </div>
                    <div class="changeNumber-new">
                        <b>Nhập số điện thoại mới:</b>
                    </div>
                    <form action="{{ URL::to('/update-phoneNumber/' .$user->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <input type="text" name="phoneNumber" class="changeNumber-input">
                        </div>
                        <div class="text-right">
                            <button class="btn btn-success changeNumber-btn" type="submit">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="changeNumber-right">
                    <div class="new-job-right-title">
                        Việc làm mới
                    </div>
                    @foreach ($jobs as $job)
                        <div class="new-job-right-item">
                            <a href="{{ URL::to('/career/' .$job->job_id) }}" class="new-job-more-link">
                                <div class="new-job-more-name">
                                    {{ $job->job_name }}   
                                </div>
                                <div class="new-job-more-company">
                                    @foreach ($employers as $employer)
                                        @if ($job->employer_id == $employer->employer_id)
                                            {{ $employer->employer_name }}
                                        @endif
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
   </div>
@endsection