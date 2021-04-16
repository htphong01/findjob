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
                        <b>Số điện thoại: </b> {{ $customer->phoneNumber}}
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
                        <div class="col-sm-4 text-center">
                            @if ($customer->avatar)
                                <img class="image-avatar" src="{{ asset($customer->avatar) }}" style="width: 80%; border-radius: 50%">
                            @else
                                @if ($customer->gender == 1)
                                    <img class="image-avatar" src="{{ asset('avatar/male.png') }}" style="width: 80%; border-radius: 50%">
                                @elseif($customer->gender == 2)
                                    <img class="image-avatar" src="{{ asset('avatar/female.png') }}" style="width: 80%; border-radius: 50%">
                                @else 
                                    <img class="image-avatar" src="{{ asset('avatar/no-gender.png') }}" style="width: 80%; border-radius: 50%">
                                @endif
                            @endif
                            <form action="{{ URL::to('/change-avatar') }}" id="avatarForm" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <label for="avatar"  style="margin-top: 4px; font-size: 40px; cursor: pointer;">
                                    <i class="fas fa-camera"></i>
                                </label>
                                <input type="file" name="userAvatar" id="avatar" accept="image/*" style="display: none" onchange="submit()">
                            </form>
                        </div>
                        <div class="col-sm-8">
                            <form action="{{ URL::to('user/update/' .$user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="user-infor-details">
                                    <label for=""><b>Tên: </b></label>
                                    <input type="text" class="user-infor-input" name="username" value="{{ $user->name }}">
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Ngày sinh: </b></label>
                                    <input name="dateOfBirth" type="date" min="1990-01-01" max="2200-01-01" value="{{ $customer->dateOfBirth}}">
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Giới tính: </b></label>
                                    <select name="gender">
                                        @foreach ($genders as $gender)
                                            @if ($gender->id == $customer->gender)
                                                <option value="{{ $gender->id}}" selected>{{ $gender->name }}</option>
                                            @else 
                                                <option value="{{ $gender->id}}">{{ $gender->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="user-infor-details">
                                    <label for=""><b>Địa chỉ: </b></label>
                                    <input type="text" class="user-infor-input" name="address" value="{{ $customer->address }}">
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