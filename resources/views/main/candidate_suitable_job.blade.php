@extends('layouts.main')

@section('title')
    Việc làm phù hợp
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
                <span>Bạn quan tâm về</span>
            </div>
                @if (count($suitable_categories) > 0)
                    <div class="suitable_category_wrap">
                        @foreach ($suitable_categories as $suitable_category)
                            <div class="suitable_job-item">
                                <b>{{ $suitable_category->category_name }}</b>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <button class="btn btn-success suitable_category-change" 
                        data-toggle="modal" data-target="#suitable_category">Chỉnh sửa</button>
                    </div>
                @else
                    <div style="font-size: 16px">Bạn hiện chưa quan tâm về ngành nghề nào</div>
                    <div>
                        <button class="btn btn-success suitable_category-change" 
                        data-toggle="modal" data-target="#suitable_category">
                            Thêm
                        </button>
                    </div>
                @endif
            <div class="user-infor-title">
                <span>Công việc phù hợp</span>
            </div>
            {{-- Modal --}}
            <div class="modal" id="suitable_category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Bạn quan tâm về: </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('change_suitable_category') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <select name="category1" class="suitable_category_select" class="form-control">
                                        @foreach ($categories as $category)
                                            @if (count($suitable_categories) > 0)
                                                @if ($suitable_categories[0]->category_id == $category->category_id)
                                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                                                @else
                                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="category2" class="suitable_category_select" class="form-control">
                                        @foreach ($categories as $category)
                                            @if (count($suitable_categories) > 1)
                                                @if ($suitable_categories[1]->category_id == $category->category_id)
                                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                                                @else
                                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="category3" class="suitable_category_select" class="form-control">
                                        @foreach ($categories as $category)
                                            @if (count($suitable_categories) > 2)
                                                @if ($suitable_categories[2]->category_id == $category->category_id)
                                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                                                @else
                                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px;">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($suitable_jobs as $job)
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
                                <a href="{{ URL::to('/career/' .$job->job_slug) }}" class="new-job-name__link">{{ $job->job_name }}</a>
                            </div>
                            <div class="new-job-company" style="font-size: 14px">
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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-4">
            <div class="user-infor-right" style="margin-top: 0px;">
                <div class="user-infor-right-title">Quản lý tài khoản</div>
                <div class="user-infor-right-wrap">
                    <div class="user-infor-right-header">Hồ sơ của bạn</div>
                    <ul class="user-infor-right-list">
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('/user/information/'. $user->id) }}" class="user-infor-right-link">
                                <i class="far fa-user"></i>
                                <span>Tài khoản</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('/user/show-cv/' .$user->id) }}" class="user-infor-right-link">
                                <i class="far fa-file-alt"></i>
                                <span>Quản lý CV</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="https://vietcv.io/templates" target="_blank" class="user-infor-right-link">
                                <i class="far fa-file-alt"></i>
                                <span>Tạo CV</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user-infor-right-header">Việc làm của bạn</div>
                    <ul class="user-infor-right-list">
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('user/applied-job') }}" class="user-infor-right-link">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Việc làm đã ứng tuyển</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('user/suitable-job') }}" class="user-infor-right-link">
                                <i class="far fa-edit"></i>
                                <span style="color: #00B9F2; font-weight: bold">Việc làm phù hợp</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('user/deleted-job') }}" class="user-infor-right-link">
                                <i class="far fa-trash-alt"></i>
                                <span>Đã rút hồ sơ</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user-infor-right-header">Hỗ trợ</div>
                    <ul class="user-infor-right-list">
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('user/my-articles') }}" class="user-infor-right-link">
                                <i class="fas fa-newspaper"></i>
                                <span>Bài viết của tôi</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('/articles') }}" class="user-infor-right-link">
                                <i class="fas fa-briefcase"></i>
                                <span>Cẩm nang nghề nghiệp</span>
                            </a>
                        </li>
                        <li class="user-infor-right-item">
                            <a href="{{ URL::to('/help') }}" class="user-infor-right-link">
                                <i class="far fa-bell"></i>
                                <span>Trợ giúp</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user-infor-logout">
                        <a href="{{ URL::to('/user/logout') }}" class="user-infor-logout-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection