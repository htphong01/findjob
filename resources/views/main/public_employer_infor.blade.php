@extends('layouts.main')

@section('title')
    {{ $employer->name }}
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
    <div class="container new-job-content">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header article-write-title">
                      Thông tin nhà tuyển dụng
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-center">
                                <table style="width: 100%; font-size: 18px" class="table table-bordered" >
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Logo:</td>
                                        <td class="pl-5" style="width: 65%">
                                            <img class="public-employer-logo" src="{{ asset($employer->avatar) }}" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Tên công ty:</td>
                                        <td class="pl-5" style="width: 65%">{{ $employer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Địa chỉ:</td>
                                        <td class="pl-5" style="width: 65%">{{ $employer->address }}</td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Email:</td>
                                        <td class="pl-5" style="width: 65%">{{ $employer->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Số điện thoại:</td>
                                        <td class="pl-5" style="width: 65%">{{ $employer->phoneNumber }}</td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Tổng số tin tuyển dụng:</td>
                                        <td class="pl-5" style="width: 65%">
                                           {{$employer->employer_total_job}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="" style="font-weight: 500; ">Giới thiệu công ty:</td>
                                        <td class="pl-5" style="width: 65%">
                                            {!! $employer->employer_description !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-job-title" style="margin-top: 50px">
                    <span>Các tin tuyển dụng gần đây</span>
                </div>
                @foreach ($employer_jobs as $job)
                    <div class="row nj-item-block">
                        <div class="col-sm-3 nj-emloyer-logo-block">
                            <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="nj-emloyer-logo__link">
                                @if ($employer->avatar)
                                    <img src="{{ asset($employer->avatar) }}" class="nj-employer-logo" >
                                @else
                                    <img src="{{ asset('avatar/cong-ty-tnhh-robocash-viet-nam-10-logo3.gif') }}" class="nj-employer-logo">
                                @endif
                            </a>
                        </div>
                        <div class="col-sm-9 nj-job-infor">
                            <div class="new-job-item">
                                <div class="new-job-name">
                                    <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="new-job-name__link">{{ $job->job_name }}</a>
                                </div>
                                <div class="new-job-address">
                                    Nơi làm việc: 
                                    @foreach ($cities as $city)
                                        @if ($city->id == $job->job_address)
                                            {{ $city->city_name }}
                                        @endif
                                    @endforeach
                                </div>
                                <div class="new-job-deadline">
                                    Thời hạn:
                                    <?php 
                                        echo date("d-m-Y", strtotime($job->job_deadline));
                                    ?>
                                </div>
                                <div class="new-job-icon-block">
                                    <div class="new-job-icon-item">
                                        <i class="fas fa-trophy"></i> Thưởng
                                    </div>
                                    <div class="new-job-icon-item">
                                        <i class="fas fa-graduation-cap"></i> Đào tạo
                                    </div>
                                    <div class="new-job-icon-item">
                                        <i class="fas fa-ellipsis-h"></i> Khác
                                    </div>
                                </div>
                                <div class="new-job-login">
                                    <a href="{{ URL::to('user/login') }}" class="new-job-login-link">
                                        <?php
                                            $login = Session::get('login');
                                            echo $login;
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                @endforeach
            </div>
            
            <div class="col-sm-4">
                <div class="new-job-right">
                    <div class="new-job-right-title">
                        Việc làm mới nhất
                    </div>
                    <div class="new-job-right-item">
                        @foreach ($jobs as $job_deadline)
                            <a href="{{ URL::to('/career/' .$job_deadline->job_slug) }}" class="new-job-more-link">
                                <div class="new-job-more-name">
                                   @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                            {{ $job->job_name }}
                                        @endif
                                   @endforeach
                                </div>
                                <div class="new-job-more-company">
                                    @foreach ($all_jobs as $job)
                                    @if ($job->job_id == $job_deadline->job_id)
                                        @foreach ($employers as $employer)
                                            @if ($employer->employer_id == $job->employer_id)
                                                {{ $employer->employer_name }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise3.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>

        </div>
        <div class="row advertise-wrap">
            <img src="{{ asset('Job/images/advertise1.png') }}" alt="" class="advertise-img">
        </div>
    </div>
@endsection