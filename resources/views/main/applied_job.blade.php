@extends('layouts.main')

@section('title')
    Việc làm đã ứng tuyển
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
                Danh sách vị trí đã ứng tuyển
            </div>
            <table class="table table-bordered table-hover" style="font-size: 16px">
                <thead class="">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Vị trí tuyển dụng</th>
                    <th scope="col" class="text-center hide-on-mobile" style="width: 15%;">Thời hạn</th>
                    <th scope="col" class="text-center hide-on-mobile" style="width: 15%;">Tình trạng</th>
                    <th class="text-center" style="width: 15%;">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($candidate_jobs->count() == 0)
                      <tr>
                          <td class="text-center " colspan="4">Bạn chưa nộp hồ sơ cho vị trí tuyển dụng nào</td>
                      </tr>
                  @else
                    @foreach ($candidate_jobs as $index=>$candidate_job)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>
                            @foreach ($jobs as $job)
                                <a href="{{ URL::to('/career/' .$job->job_slug) }}" style="color: #000;" class="applied_job_name">
                                    @if ($job->job_id == $candidate_job->job_id)
                                        {{ $job->job_name }}
                                    @endif
                                </a>
                            @endforeach
                        </td>
                        <td class="text-center hide-on-mobile">
                            @foreach ($job_details as $job_detail)
                                @if ($job_detail->job_id == $candidate_job->job_id)
                                    <?php
                                    echo $_firstDate = date("d-m-Y", strtotime($job_detail->job_deadline));
                                    ?>
                                @endif
                            @endforeach
                        </td>
                        <td class="text-center hide-on-mobile">
                            {{ $candidate_job->status }}
                        </td>
                        <td class="text-center">
                            <a href="{{ URL::to('/user/delete-applied-job/' .$candidate_job->job_id) }}" class="btn btn-danger" style="font-size: 16px;" onclick="return confirm('Bạn có chắc chắn muốn rút hồ sơ?')">Rút hồ sơ</a>
                        </td>
                    </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
        </div>
        
        
        <div class="col-sm-4 hide-on-mobile">
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
                                <span style="color: #00B9F2; font-weight: bold">Việc làm đã ứng tuyển</span>
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