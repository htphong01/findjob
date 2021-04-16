@extends('layouts.main')

@section('title')
    Công việc mới
@endsection

@section('cities')
    <option value="0" selected>Tất cả địa điểm</option>
    @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
    @endforeach
@endsection

@section('categories')
    <option value="" selected disabled>Chọn ngành nghề</option>
    @foreach ($categories as $cate)
        <option value="{{ $cate->category_id }}"> {{ $cate->category_name }}</option>
    @endforeach
@endsection

@section('content')
    <div class="container new-job-content">
        <div class="row">
            <div class="col-sm-8">
                <div class="new-job-title">
                    <span>Hiện đang có {{ $jobs->total() }} tin tuyển dụng
                    </span>
                    <form class="new-job-ordering" action="{{ URL::to('new-job') }}" method="GET">
                        <div>Hiển thị theo: </div>
                        <div class="form-group">
                            <select name="sort" onchange="this.form.submit()" >
                                <option value="desc" <?php if($sort == 'desc') echo 'selected'; ?> >Theo ngày đăng (Mới nhất)</option>
                                <option value="asc" <?php if($sort == 'asc') echo 'selected'; ?> >Theo ngày đăng (cũ nhất)</option>
                            </select>
                        </div>
                    </form>
                </div>
                @foreach ($jobs as $job)
                    <div class="row nj-item-block">
                        <div class="col-sm-3 nj-emloyer-logo-block">
                            <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="nj-emloyer-logo__link">
                                @foreach ($employers as $employer)
                                    @if ($employer->employer_id == $job->employer_id)
                                        @if ($employer->avatar)
                                            <img src="{{ asset($employer->avatar) }}" class="nj-employer-logo" >
                                        @else
                                        <img src="{{ asset('avatar/cong-ty-tnhh-robocash-viet-nam-10-logo3.gif') }}" class="nj-employer-logo">
                                        @endif
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="col-sm-9 nj-job-infor">
                            <div class="new-job-item">
                                <div class="new-job-name">
                                    <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="new-job-name__link" >{{ $job->job_name }}</a>
                                </div>
                                <div class="new-job-company">
                                        @foreach ($employers as $employer)
                                            @if ($employer->employer_id == $job->employer_id)
                                            <a href="{{ URL::to('/public-employer-infor/' .$employer->employer_id) }}" class="new-job-company__link">
                                                {{ $employer->employer_name }}
                                            </a>
                                            @endif
                                        @endforeach
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
                                    @foreach ($all_details as $job_details)
                                        @if ($job_details->job_id == $job->job_id)
                                        <?php
                                        echo $_firstDate = date("d-m-Y", strtotime($job_details->job_deadline));
                                        ?>
                                        @endif
                                    @endforeach
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
                                        @if (!Auth::check())
                                            Đăng nhập để xem chi tiết
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="d-flex justify-content-center new-job-pagination">
                    {!! $jobs->render() !!}
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="new-job-right">
                    <div class="new-job-right-title">
                        Việc làm gấp
                    </div>
                    <div class="new-job-right-item">
                        @foreach ($jobs_deadline as $job_deadline)
                            <div class="new-job-more-link">
                                <div class="new-job-more-name">
                                   @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                        <a href="{{ URL::to('/career/' .$job->job_slug) }}" >
                                            {{ $job->job_name }}
                                        </a>
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
                            </div>
                        @endforeach
                        
                    </div>
                </div>

                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise3.jpg') }}" alt="" style="width: 100%">
                </div>
                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise2.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
@endsection