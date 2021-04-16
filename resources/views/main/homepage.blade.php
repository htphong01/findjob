@extends('layouts.main')

@section('title')
    Trang chủ
@endsection

@section('categories')
    <option value="" selected disabled>Chọn ngành nghề</option>
    @foreach ($category as $cate)
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
     <!-- Carousel -->
     <div id="demo" class="carousel slide carousel-list" data-ride="carousel">
    	<!-- Indicators -->
    	<ul class="carousel-indicators">
    		<li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
    	</ul>
    	<!-- The slideshow -->
    	<div class="carousel-inner">
    		<div class="carousel-item active">
    			<img src="{{ asset('Job/Images/carousel1.png') }}">
    			<div class="carousel-caption">
    				<h5 class="display-2">Hợp tác</h5>
    				<h6>Bạn không tìm được việc làm!!Bạn bất lực, khó khăn!!! Hãy đến với HOTJOB ngay !!! Mọi vấn đề của bạn sẽ được giải quyết!!!</h6>
    				<a href="{{ URL::to('/new-job') }}"><button type="button" class="btn btn-outline-light btn-lg">Chi tiết</button></a>
    				<a href="{{ URL::to('/new-job') }}"><button type="button" class="btn btn-primary btn-lg">Khám phá ngay thôi!!</button></a>
    			</div>
    		</div>
    		<div class="carousel-item">
    	        <img src="{{ asset('Job/Images/carousel2.png') }}" width="1500" height="420">
            </div>
            <div class="carousel-item">
    	        <img src="{{ asset('Job/Images/carousel3.png') }}" width="1500" height="420">
            </div>
    	</div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Explore -->
    <div class="container explore">
        <h1 class="text-center">
            <i class="far fa-hand-point-down"></i>
            Tại sao lại chọn HOTJOB
        </h1>
    </div>
    <div class="box_content_cong_s00 container" >
        <div class="why-hotjob clearfix">
            <div class="row why-item">
                <div class="col-md-6">
                    <img src="{{ asset('Job/images/ip1.png') }}" alt="" style="width: 100%">
                </div>
                <div class="col-md-6 align-content-center">
                    <div>
                        <div class="why-title">
                            Việc làm tốt nhất từ những nhà tuyển dụng hàng đầu
                        </div>
                        <div class="why-details">
                            100% thông tin việc làm được xác thực và kiểm duyệt chặt chẽ</br>
                            Kết nối nhanh với nhà tuyển dụng, tìm kiếm việc làm dễ dàng</br>
                            Công cụ hỗ trợ đầy đủ với nhiều mẫu CV đẹp mắt</br> 
                            Thông báo việc làm tiện lợi</br>
                            Tổng đài tư vấn dành riêng cho Người tìm việc
                        </div>
                    </div>
                </div>
            </div>
            <div class="row why-item">
                <div class="col-md-6">
                    <div>
                        <div class="why-title why-title-moblie-1">
                            Tuyển dụng hiệu quả và nhanh chóng
                        </div>
                        <div class="why-details">
                            Hàng triệu ứng viên chất lượng</br>
                            Thông tin hồ sơ ứng viên được kiểm duyệt chặt chẽ</br>
                            Phân loại xác thực theo số điện thoại</br> 
                            Cam kết với chế độ bảo hành chất lượng tuyển dụng</br>
                            Chăm sóc 1 - 1 với chuyên viên tư vấn
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-left">
                    <img src="{{ asset('Job/images/ip1.png') }}" alt="" width="100%">
                </div>
                <div class="why-title why-title-mobile" style="display: none">
                    Tuyển dụng hiệu quả và nhanh chóng
                </div>
            </div>
        </div>
    </div>

    <div class="container explore">
        <h1 class="text-center">
            <i class="far fa-hand-point-down"></i>
            Khám phá ngay những việc làm tốt nhất trên HOTJOB
        </h1>
    </div>

    <div class="main-content container">
        <div class="row">
            <div class="col-sm-12 content-title">
                <i class="fas fa-bookmark"></i>
                Việc làm mới
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-sm-6" style="padding: 0 7px !important">
                    <div class="job-item">
                        <div class="row">
                            <div class="col-sm-3 job-item-left">
                                <a href="{{ URL::to('/career/' .$job->job_slug) }}">
                                    @foreach ($employers as $employer)
                                        @if ($employer->employer_id == $job->employer_id)
                                            @if ($employer->avatar)
                                                <img src="{{ asset($employer->avatar) }}" alt="" style="width: 100%; max-height: 82px;">
                                            @else
                                                <img src="{{ asset('avatar/logo-default-123321.jpg') }}" alt="" style="width: 100%; max-height: 82px;">
                                            @endif
                                        @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="col-sm-9 job-item-right">
                                <div class="job-name">
                                    <span class="badge badge-secondary badge-success job-name-label">Mới</span>
                                    <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="job-name__link">{{ $job->job_name }}</a>
                                </div>
                                <div class="company-name">                            
                                        @foreach ($employers as $employer)
                                            @if ($job->employer_id == $employer->employer_id)
                                            <a href="{{ URL::to('/public-employer-infor/' .$employer->employer_id) }}" class="company-name__link">
                                                {{ $employer->employer_name }}
                                            </a>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="company-deadline">                            
                                    <a href="javascript:void(0)" class="company-deadline__link">
                                        Thời hạn: 
                                        @foreach ($all_details as $item)
                                            @if ($item->job_id == $job->job_id)
                                            <?php
                                            echo $_firstDate = date("d-m-Y", strtotime($item->job_deadline));
                                            ?>
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <div class="new-job-icon-block">
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-trophy"></i> Thưởng
                                    </div>
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-graduation-cap"></i> Đào tạo
                                    </div>
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-ellipsis-h"></i> Khác
                                    </div>
                                </div>
                                <div class="job-salary">
                                    <a href="{{ URL::to('user/login') }}" class="salary-link">
                                        @if (!Auth::check())
                                            Đăng nhập để xem chi tiết
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <a href="{{ URL::to('/new-job') }}" class="seemore-link">Xem thêm</a>
            </div>
        </div>

        <div class="row advertise-wrap">
            <img src="{{ asset('Job/images/advertise1.png') }}" alt="" class="advertise-img">
        </div>

        <div class="row">
            <div class="col-sm-12 content-title">
                <i class="fas fa-bookmark"></i>
                Việc làm gấp
            </div>
        </div>
        <div class="row">
            @foreach ($jobs_deadline as $job_deadline)
                <div class="col-sm-6" style="padding: 0 7px !important">
                    <div class="job-item">
                        <div class="row">
                            <div class="col-sm-3 job-item-left">
                                    @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                        <a href="{{ URL::to('/career/' .$job->job_slug) }}">
                                            @foreach ($employers as $employer)
                                                @if ($employer->employer_id == $job->employer_id)
                                                    @if ($employer->avatar)
                                                        <img src="{{ asset($employer->avatar) }}" alt="" style="width: 100%; max-height: 82px;">
                                                    @else
                                                        <img src="{{ asset('avatar/logo-hurry.png') }}" alt="" style="width: 100%; max-height: 82px;">
                                                    @endif
                                                @endif
                                            @endforeach
                                        </a>
                                        @endif
                                    @endforeach
                                
                            </div>
                            <div class="col-sm-9 job-item-right">
                                <div class="job-name">
                                    <span class="badge badge-secondary badge-success job-name-label">Gấp</span>
                                    @foreach ($all_jobs as $job_item)
                                        @if ($job_deadline->job_id == $job_item->job_id)
                                            <a href="{{ URL::to('/career/' .$job_item->job_slug) }}" class="job-name__link">
                                                {{ $job_item->job_name }}  
                                            </a>                                      
                                        @endif
                                    @endforeach
                                </div>
                                <div class="company-name">                            
                                        @foreach ($all_jobs as $job)
                                            @if ($job->job_id == $job_deadline->job_id)
                                                @foreach ($employers as $employer)
                                                    @if ($employer->employer_id == $job->employer_id)
                                                        <a href="{{ URL::to('/public-employer-infor/' .$employer->employer_id) }}" class="company-name__link">
                                                            {{ $employer->employer_name }}
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                </div>
                                <div class="company-deadline">                            
                                    <a href="javascript:void(0)" class="company-deadline__link">
                                        Thời hạn: 
                                        <?php
                                            echo $_firstDate = date("d-m-Y", strtotime($job_deadline->job_deadline));
                                        ?>
                                    </a>
                                </div>
                                <div class="new-job-icon-block" >
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-trophy"></i> Thưởng
                                    </div>
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-graduation-cap"></i> Đào tạo
                                    </div>
                                    <div class="new-job-icon-item" style="font-size: 13px;">
                                        <i class="fas fa-ellipsis-h"></i> Khác
                                    </div>
                                </div>
                                <div class="job-salary">
                                    <a href="{{ URL::to('user/login') }}" class="salary-link">
                                        @if (!Auth::check())
                                            Đăng nhập để xem chi tiết
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach         
        </div>
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <a href="{{ URL::to('/new-job') }}" class="seemore-link">Xem thêm</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 content-title">
                <i class="fas fa-bookmark"></i>
                Góc nghề nghiệp
            </div>
        </div>
        <div class="row">
           @foreach ($articles as $article)
                <div class="col-sm-12 advice-item">
                    <a href="{{ URL::to('article-details/' .$article->slug) }}" class="advice-item__link">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="advice-img-wrap">
                                    <img src="{{ asset($article->images) }}" class="advice-img">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="advice-title">{{ $article->name }}</div>
                                <div class="advice-category">
                                    @foreach ($users as $user)
                                        @if ($user->id == $article->author_id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </div>
                                <div class="advice-details" style="font-weight: 400">
                                    {!! $article->description !!}
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
           @endforeach

        </div>
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <a href="{{ URL::to('articles') }}" class="seemore-link">Xem thêm</a>
            </div>
        </div>

        <div class="row advertise-wrap">
            <img src="{{ asset('Job/images/advertise1.png') }}" alt="" class="advertise-img">
        </div>
    </div>
@endsection