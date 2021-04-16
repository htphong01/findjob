@extends('layouts.main')

@section('title')
    {{ $job->job_name }}
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
    <div class="container career-details">
        <div class="row" style="padding-bottom: 32px;">
            <div class="col-sm-8">
                <div class="career-name">
                    {{ $job->job_name }}
                </div>
                <div class="career-company-name">
                    <a href="{{ URL::to('/public-employer-infor/'. $employer->employer_id) }}" class="career-company__link">
                        {{ $employer->employer_name }}
                    </a>
                </div>
                <div class="career-company-address">
                    Địa chỉ: 
                    {{ $job_city->city_name }}
                </div>
                <div class="career-total-candidate">
                    Hiện đang có {{ $job->job_total_candidate }} ứng viên
                </div>
            </div>
            <div class="col-sm-4 align-items-center">
                @if ($user->privacy == 2)
                    @if ($candidate_job)
                        <button class="btn btn-success candidate-btn" style="cursor: pointer" disabled>
                            Đã nộp hồ sơ
                        </button>
                    @else
                        <button class="btn btn-success candidate-btn">
                            <a href="{{ URL::to('/apply-job/' .$job->job_id .'/' .$user->id) }}"
                                 class="candidate-btn" onclick="return confirm('Bạn sẽ bị trừ 10 coins, bạn muốn chứ ?')">Nộp hồ sơ</a>
                        </button>
                    @endif
                @endif
               <div style="margin-top: 16px">
                    <a href="{{ route('add_coins') }}" class="text-danger" style="font-size: 16px; text-decoration: none">{{ session('success') }}</a>
               </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="career-title-infor">
                    <span>THÔNG TIN</span>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 16px;">
            <div class="col-sm-8">        
                <div class="career-title-item" style="margin-top: 32px;">MÔ TẢ CÔNG VIỆC</div>
                <div class="career-description" style="white-space: pre-wrap; word-wrap: break-word; overflow: hidden;">
                    <p>{{ $job_detail->job_description }}</p>
                </div>
                <div class="career-title-item">YÊU CẦU CÔNG VIỆC</div>
                <div class="career-description" style="white-space: pre-wrap; word-wrap: break-word; overflow: hidden;">
                    <p>{{ $job_detail->job_require }}</p>
                </div>
                <div class="career-title-item">QUYỀN LỢI</div>
                <div class="career-description" style="white-space: pre-wrap; word-wrap: break-word; overflow: hidden;">
                    <p>{{ $job_detail->job_benefit }}</p>
                </div>
                <div class="career-title-item" style="margin-top: -16px">
                    Thời hạn: 
                    <?php
                    echo $_firstDate = date("d-m-Y", strtotime($job_detail->job_deadline));
                    ?>
                </div>
                <div class="candidate-btn-wrap" style="margin: 16px 0;">
                    @if ($user->privacy == 2)
                        @if ($candidate_job)
                        <button class="btn btn-success candidate-btn" style="cursor: pointer" disabled>
                            Đã nộp hồ sơ
                        </button>
                        @else
                            <button class="btn btn-success">
                                <a href="{{ URL::to('/apply-job/' .$job->job_id .'/' .$user->id) }}"
                                     class="candidate-btn" onclick="return confirm('Bạn sẽ bị trừ 10 coins, bạn muốn chứ ?')">Nộp hồ sơ</a>
                            </button>
                        @endif
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="career-more-infor-wrap">
                    <div class="career-more-infor">
                        <b>Ngày đăng tuyển:</b></br>
                        {{ $job_detail->created_at->format('d.m.Y') }}
                    </div>
                    <div class="career-more-infor">
                        <b>Ngành nghề:</b></br>
                        {{ $category->category_name }}
                    </div>
                    <div class="career-more-infor">
                        <b>Mức lương: </b>
                        {{ $job_detail->job_salary }}
                    </div>
                    <div class="career-more-infor">
                        <b>Làm việc tại: </b>
                        {{ $job_city->city_name }}
                    </div>
                    <div class="candidate-btn-wrap">
                        @if ($user->privacy == 2)
                            @if ($candidate_job)
                            <button class="btn btn-success candidate-btn" style="cursor: pointer" disabled>
                                Đã nộp hồ sơ
                            </button>
                            @else
                                <button class="btn btn-success">
                                    <a href="{{ URL::to('/apply-job/' .$job->job_id .'/' .$user->id) }}"
                                         class="candidate-btn" onclick="return confirm('Bạn sẽ bị trừ 10 coins, bạn muốn chứ ?')">Nộp hồ sơ</a>
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="career-more-job">
                    <div class="career-more-job-title">
                        Công việc tương tự
                    </div>
                    @foreach ($job_example as $job_item)
                        <a href="{{ URL::to('/career/' .$job_item->job_slug) }}" class="career-more-job__link">
                            <div class="career-more-job-name ">
                                <b>{{ $job_item->job_name }}</b>
                            </div>
                            <div class="career-more-job-company">
                                @foreach ($employer_all as $employer_item)
                                    @if ($employer_item->employer_id == $job_item->employer_id)
                                        {{ $employer_item->employer_name }}
                                    @endif
                                @endforeach
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        
        <div class="row advertise-wrap">
            <img src="{{ asset('Job/images/advertise1.png') }}" alt="" class="advertise-img">
        </div>
    </div>
@endsection