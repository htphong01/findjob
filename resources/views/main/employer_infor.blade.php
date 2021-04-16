@extends('layouts.main')

@section('title')
    {{ $user->name }}
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
                <div class="user-infor-wrap">
                    <div class="user-infor-title">
                        <span>Thông tin tài khoản</span>
                    </div>
                    <div class="user-infor-email">
                        <b>Email: </b>{{ $user->email }}
                    </div>
                    <div class="user-infor-password">
                        <b>Mật khẩu: </b> *********
                        <a href="{{ URL::to('user/change-password') }}"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="user-infor-number">
                        <b>Số điện thoại: </b> 
                        @if ($customer->phoneNumber)
                            {{ $customer->phoneNumber}}
                        @else
                            Bạn chưa thêm số điện thoại
                        @endif
                        <a href="{{ URL::to('/change-phone-number/' .$user->id) }}"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="user-infor-number">
                        <b>Số dư: </b> {{ $user->coin}}
                        <i class="fab fa-viacoin" style="color: #00B9F2"></i>
                        <a href="{{ route('add_coins') }}"><i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="user-infor-wrap user-infor-wrap-bottom">
                    <div class="user-infor-title">
                        <span>Thông tin cá nhân</span>
                    </div>
                    <h4 class="text text-success"> {{ session('success')}}</h4>
                    <div class="row" style="margin-top: 40px">
                        <div class="col-sm-12">
                            <div class="user-infor-details d-block">
                                <label for=""><b>Logo: </b></label>
                                @if ($customer->avatar)
                                    <img src="{{ asset($customer->avatar) }}" alt="" width="100%">
                                @endif
                            </div>
                            <form action="{{ URL::to('/change-avatar') }}" class="text-center my-3" method="post" enctype="multipart/form-data" style="width: 100%">
                                {{ csrf_field() }}
                                <label for="avatar" class="btn btn-primary"  style="margin-top: 4px; font-size: 16px; cursor: pointer;">
                                    Tải logo lên
                                </label>
                                <input type="file" name="userAvatar" id="avatar" accept="image/*" style="display: none" onchange="form.submit()">
                            </form>
                            <form action="{{ URL::to('user/update/' .$user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="user-infor-details">
                                    <label for=""><b>Tên: </b></label>
                                    <input type="text" class="user-infor-input" name="username" value="{{ $user->name }}">
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Điện thoại: </b></label>
                                    <input type="text" class="user-infor-input" name="phoneNumber" value="{{ $customer->phoneNumber }}">
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Tỉnh/Thành phố: </b></label>
                                    <select name="city" id="">
                                        @foreach ($cities as $city)
                                            @if ($city->id == $customer->city)
                                                <option value="{{ $city->id }}" selected>{{ $city->city_name }}</option>
                                            @else
                                                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Địa chỉ: </b></label>
                                    <input type="text" class="user-infor-input" name="address" value="{{ $customer->address }}">
                                </div>
                                <div class="user-infor-details" style="display: block">
                                    <label for=""><b>Mô tả công ty: </b></label><br>
                                    <textarea name="description" id="" rows="20" style="resize: none; width: 100%">{!! $customer->employer_description !!}</textarea>
                                    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                                    <script>
                                        CKEDITOR.replace( 'description' );
                                    </script>
                                </div>
                                <div class="text-center user-infor-btn">
                                    <button class="btn btn-success" type="submit">
                                        Cập nhật
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="user-infor-right">
                    <div class="user-infor-right-title">Quản lý tài khoản</div>
                    <div class="user-infor-right-wrap">
                        <div class="user-infor-right-header">Hồ sơ của bạn</div>
                        <ul class="user-infor-right-list">
                            <li class="user-infor-right-item">
                                <a href="{{ URL::to('/user/information/'. $user->id) }}" class="user-infor-right-link">
                                    <i class="far fa-user"></i>
                                    <span style="color: #00B9F2; font-weight: bold">Tài khoản</span>
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