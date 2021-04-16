@extends('layouts.main')

@section('title')
    Danh sách tin tuyển dụng
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
            <div class="mobile-title show-on-mobile">
                Danh sách tin tuyển dụng
            </div>
            <h4 class="text text-success">{{ session('success') }}</h4>
            <table class="table table-bordered table-hover" style="font-size: 16px">
                <thead>
                  <tr>
                    <th class="text-center">STT</th>
                    <th scope="col">Vị trí tuyển dụng</th>
                    <th scope="col" class="text-center hide-on-mobile">Thời hạn</th>
                    <th scope="col" class="text-center">Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($jobs->count() == 0)
                        <tr>
                            <td colspan="3" class="text-center">
                                Hiện bạn chưa đăng tải tin tuyển dụng nào.
                                <a href="{{ URL::to('employer/add-job') }}">Đăng tin tuyển dụng ngay</a>
                            </td>
                        </tr>
                    @else
                        @foreach ($jobs as $index=>$job)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td style="width: 65%">
                                        <a href="{{ URL::to('/career/' .$job->job_slug) }}" style="color: #000" class="applied_job_name"> {{ $job->job_name }}</a>
                                    </td>
                                    <td class="text-center hide-on-mobile">
                                        @foreach ($job_details as $job_detail)
                                            @if ($job_detail->job_id == $job->job_id)
                                                <?php
                                                    echo $_firstDate = date("d-m-Y", strtotime($job_detail->job_deadline));
                                                ?>
                                            @endif
                                        @endforeach
                                    </td>
                                    <th class="text-center ">
                                        <a href="{{ URL::to('employer/edit/' .$job->job_id) }}" class="btn btn-primary">
                                            <i class="far fa-edit" style="font-size: 20px"></i>
                                        </a>
                                        <a href="{{ URL::to('employer/delete/' .$job->job_id) }}" onclick="return confirm('Bạn có thực sự muốn xóa')" class="btn btn-danger">
                                            <i class="far fa-trash-alt" style="font-size: 20px"></i>
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                    @endif
                </tbody>
            </table>
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
                                <span>Giấy phép kinh doanh</span>
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
                                <span style="color: #00B9F2; font-weight: bold">Danh sách tin tuyển dụng</span>
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