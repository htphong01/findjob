@extends('layouts.main')

@section('title')
    Giấy phép kinh doanh
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
        <div class="row" class="">
            <div class="col-sm-8">
                <div class="new-job-title">
                    <span>Giấy phép kinh doanh</span>
                </div>
               @if ($customer->business_paper == null)
                   <h4 style="margin-bottom: 20px">Bạn chưa đăng tải giấy phép kinh doanh.</h4>
                   <form action="{{ URL::to('/update-business-paper') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <input type="file" style="height: 30px; font-size: 16px;" name="businessPaperPath" required="true">
                    </div>
                    <button type="submit" class="btn btn-success" 
                    style="margin: 16px 0; font-size: 16px; font-weight: bold; padding: 8px 16px;">Đồng ý</button>
                </form>
                @else
                <div class="show-cv-action">
                    <div>
                        <a href="{{ asset($customer->business_paper) }}" class="btn btn-info" target="_blank">
                            <i class="fas fa-download"></i> Tải xuống
                        </a>
                    </div>
                    <div>
                        <a href="{{ URL::to('user/delete-business-paper') }}" class="btn btn-danger" onclick="return confirm('Bạn có thực sự muốn xóa giấy phép kinh doanh hiện tại?')">
                            <i class="far fa-trash-alt"></i> Xóa
                        </a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset($customer->business_paper) }}" alt="" style="width: 100%">
                </div>
               @endif
            </div>
            <div class="col-sm-4 hide-on-mobile">
                <div class="user-infor-right" style="margin-top: 0">
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
                                <a href="{{ URL::to('/user/business-paper') }}" class="user-infor-right-link">
                                    <i class="far fa-file-alt"></i>
                                    <span style="color: #00B9F2; font-weight: bold">Giấy phép kinh doanh</span>
                                </a>
                            </li>
                        </ul>
                        <div class="user-infor-right-header">Quản lý tin tuyển dụng</div>
                        <ul class="user-infor-right-list">
                            <li class="user-infor-right-item">
                                <a href="{{ URL::to('employer/add-job') }}" class="user-infor-right-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>Đăng tin tuyển dụng</span>
                                </a>
                            </li>
                            <li class="user-infor-right-item">
                                <a href="{{ URL::to('employer/posted-job') }}" class="user-infor-right-link">
                                    <i class="far fa-edit"></i>
                                    <span>Danh sách tin tuyển dụng</span>
                                </a>
                            </li>
                        </ul>
                        <div class="user-infor-right-header">Quản lý ứng viên</div>
                        <ul class="user-infor-right-list">
                            <li class="user-infor-right-item">
                                <a href="{{ URL::to('/user/candidate-posted-job') }}" class="user-infor-right-link">
                                    <i class="fas fa-book"></i>
                                    <span>Hồ sơ đã ứng tuyển</span>
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
                                    <span>Cẩm nang</span>
                                </a>
                            </li>
                            <li class="user-infor-right-item">
                                <a href="{{ URL::to('/help') }}" class="user-infor-right-link">
                                    <i class="far fa-question-circle"></i>
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