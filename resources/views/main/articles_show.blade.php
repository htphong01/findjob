@extends('layouts.main')

@section('title')
    Cẩm nang nghề nghiệp
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
                <div class="article-show-title">
                    <span>Góc nghề nghiệp</span>
                </div>
                <div>
                    @foreach ($articles as $article)
                        <a href="{{ URL::to('article-details/' .$article->slug) }}" class="advice-item__link">
                            <div class="row advice-wrap">
                                <div class="col-sm-5">
                                    <div class="advice-img-wrap">
                                        <img src="{{ asset($article->images) }}" class="advice-img">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="advice-title">{{ $article->name }}</div>
                                    <div class="advice-category">
                                        <i class="fas fa-user" style="font-size: 12px;"></i>
                                        @foreach ($users as $user)
                                            @if ($user->id == $article->author_id)
                                                {{ $user->name }}
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="advice-details">
                                        {!! $article->description !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {!! $articles->render() !!}
                </div>
            </div>
            
            <div class="col-sm-4">
                @if (Auth::check() == 1)
                    <div class="mobile-btn-wrap btn-write-new-article">
                        <button class="btn btn-success" 
                        style="font-size: 16px; font-weight: bold; padding: 8px 16px;">
                            <a href="{{ URL::to('/user/write-advice-article') }}" style="color: #fff; text-decoration: none">Viết bài</a>
                        </button>
                    </div>
                @endif
                <div class="new-job-right" style="margin-top: 16px">
                    <div class="new-job-right-title">
                        Việc làm gấp
                    </div>
                    <div class="new-job-right-item">
                        @foreach ($jobs_deadline as $job_deadline)
                            <div class="new-job-more-link">
                                <div class="new-job-more-name">
                                   @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                            <a href="{{ URL::to('/career/' .$job->job_slug) }}">
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
            </div>
        </div>
    </div>
@endsection