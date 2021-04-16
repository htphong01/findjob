@extends('layouts.main')

@section('title')
    Quản lý CV
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
                <span>CV của bạn</span>
            </div>
            @if (!$customer->candidate_cv)
                <h2>Bạn hiện chưa có CV</h2>
                <h3>Tải lên CV ngay</h3>
                <form action="{{ URL::to('/update-cv/' .$user->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <input type="file" style="height: 30px; font-size: 16px;" name="cvPath" required="true">
                    </div>
                    <button type="submit" class="btn btn-success" 
                    style="margin: 16px 0; font-size: 16px; font-weight: bold; padding: 8px 16px;">Đồng ý</button>
                </form>
            @else
                <div class="show-cv-action">
                    <div>
                        <a href="{{ asset($customer->candidate_cv) }}" class="btn btn-info" target="_blank">
                            <i class="fas fa-download"></i> Tải xuống CV
                        </a>
                    </div>
                    <div>
                        <a href="{{ URL::to('user/delete-cv') }}" class="btn btn-danger" onclick="return confirm('Bạn có thực sự muốn xóa CV hiện tại?')">
                            <i class="far fa-trash-alt"></i> Xóa CV hiện tại
                        </a>
                    </div>
                </div>
                <div class="show-cv-mobile">
                    <iframe src="{{ asset($customer->candidate_cv) }}" frameborder="0" width="100%" height="800"></iframe>
                </div>
            @endif
                
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
                                <span style="color: #00B9F2; font-weight: bold">Quản lý CV</span>
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
                                <span>Việc làm phù hợp</span>
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