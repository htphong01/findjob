@extends('layouts.main')

@section('title')
    Thay đổi mật khẩu
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
                    <span>Thay đổi mật khẩu</span>
                </div>
                
                <h4 class="text-success"> {{ session('success') }}</h4>
                <div class="changeNumber-item">
                    <form action="{{ URL::to('/update-password/' .$user->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="changeNumber-new">
                            <b>Nhập mật khẩu cũ:</b>
                        </div>
                        <div>
                            <input type="password" name="oldPassword" class="changeNumber-input">
                        </div>
                        <div class="changeNumber-new">
                            <b>Nhập mật khẩu mới:</b>
                        </div>
                        <div>
                            <input type="password" name="newPassword" id="newPassword" class="changeNumber-input">
                        </div>
                        <div class="changeNumber-new">
                            <b>Nhập lại mật khẩu mới:</b>
                        </div>
                        <h5 class="text-danger cpw-error">Mật khẩu không trùng khớp</h5>
                        <div>
                            <input type="password" name="re-newPassword" id="re-newPassword"  class="changeNumber-input">
                        </div>
    
                        <div class="text-right">
                            <button class="btn btn-success changeNumber-btn" id="cpw-btn" type="submit">Lưu</button>
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