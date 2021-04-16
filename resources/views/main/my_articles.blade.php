@extends('layouts.main')

@section('title')
    Bài viết của tôi
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
        <div class="row" >
            <div class="col-sm-8">
                <div class="mobile-title show-on-mobile">
                    Bài viết của tôi
                </div>
                <table class="table table-bordered table-hover" style="font-size: 16px">
                    <thead class="">
                      <tr>
                        <th class="text-center" style="width: 10%;">STT</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col" class="text-center" style="width: 15%;">Số lượt xem</th>
                        <th scope="col" class="text-center" style="width: 15%;">Ngày đăng</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($articles->count() == 0)
                            <tr>
                                <td colspan="4" class="text-center">Bạn chưa đăng tải bài viết nào</td>
                            </tr>
                        @else
                            @foreach ($articles as $index=>$article)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <a class="my-article-name" href="{{ URL::to('/article-details/' .$article->slug) }}" >
                                            {{ $article->name }}
                                        </a>
                                    </td>
                                    <td class="text-center">{{ $article->views }}</td>
                                    <td class="text-center">{{ $article->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
           
            <div class="col-sm-4 hide-on-mobile">
                @if (Auth::user()->privacy == 1)
                    <div class="user-infor-right" style="margin-top: 0">
                            <div class="user-infor-right-title">Quản lý tài khoản</div>
                            <div class="user-infor-right-wrap">
                                <div class="user-infor-right-header">Hồ sơ của bạn</div>
                                <ul class="user-infor-right-list">
                                    <li class="user-infor-right-item">
                                        <a href="{{ URL::to('/user/information/'. Auth::user()->id) }}" class="user-infor-right-link">
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
                                            <span>Danh sách tin tuyển dụng</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="user-infor-right-header">Quản lý ứng viên</div>
                                <ul class="user-infor-right-list">
                                    <li class="user-infor-right-item">
                                        <a href="{{ URL::to('/user/candidate-posted-job') }}" class="user-infor-right-link">
                                            <i class="fas fa-book"></i>
                                            <span style="color: #00B9F2; font-weight: bold">Hồ sơ đã ứng tuyển</span>
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
                @else
                    <div class="user-infor-right">
                        <div class="user-infor-right-title">Quản lý tài khoản</div>
                        <div class="user-infor-right-wrap">
                            <div class="user-infor-right-header">Hồ sơ của bạn</div>
                            <ul class="user-infor-right-list">
                                <li class="user-infor-right-item">
                                    <a href="{{ URL::to('/user/information/'. Auth::user()->id) }}" class="user-infor-right-link">
                                        <i class="far fa-user"></i>
                                        <span style="color: #00B9F2; font-weight: bold">Tài khoản</span>
                                    </a>
                                </li>
                                <li class="user-infor-right-item">
                                    <a href="{{ URL::to('/user/show-cv/' .Auth::user()->id) }}" class="user-infor-right-link">
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
                @endif
            </div>
        </div>
    </div>
@endsection