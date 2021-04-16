@extends('layouts.main')

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
    <div class="container">
        <div class="row" style="margin-top: 160px; margin-bottom: 100px;">
            <div class="col-sm-8">
                <div class="UserAddJob-title">
                    <span>Cập nhật tin tuyển dụng</span>
                </div>
                <h4 class="text text-success">{{ session('success')}}</h4>
                <form action="{{ URL::to('employer/update-job/' .$job->job_id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group userAddJob-form">
                      <label>Vị trí tuyển dụng: </label>
                      <input name="job_name" type="text" class="form-control" value="{{ $job->job_name }}">
                    </div>
                    <div class="form-group userAddJob-form">
                      <label for="exampleFormControlSelect1">Ngành nghề: </label>
                      <select class="form-control" name="category_id">
                        @foreach ($categories as $cate)
                            @if ($job->category_id == $cate->category_id)
                                <option value="{{ $cate->category_id }}" selected>{{ $cate->category_name }}</option>
                            @else
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                            @endif
                        @endforeach
                      </select>
                    </div>
                
                    <div class="form-group userAddJob-form">
                        <label for="exampleFormControlSelect1">Tỉnh thành: </label>
                        <select class="form-control" name="job_address">
                            @foreach ($cities as $city_item)
                                @if ($city_item->id == $job->job_address)
                                    <option value="{{ $city_item->id }}" selected>{{ $city_item->city_name }}</option>
                                @else
                                    <option value="{{ $city_item->id }}">{{ $city_item->city_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group userAddJob-form">
                      <label>Mô tả công việc:</label>
                      <textarea class="form-control" rows="5" style="resize: none;" 
                      name="job_description">{{ $job_detail->job_description }}</textarea>
                    </div>
                    <div class="form-group userAddJob-form">
                        <label>Yêu cầu công việc:</label>
                        <textarea class="form-control" rows="5" style="resize: none;" 
                        name="job_require">{{ $job_detail->job_require }}</textarea>
                    </div>
                    <div class="form-group userAddJob-form">
                        <label>Lợi ích của công việc:</label>
                        <textarea class="form-control" rows="5" style="resize: none;" 
                        name="job_benefit">{{ $job_detail->job_benefit }}</textarea>
                    </div>
                    <div class="form-group userAddJob-form">
                        <label>Lương:</label>
                        <input type="text" name="job_salary" class="form-control" value="{{ $job_detail->job_salary }}">
                    </div>
                    <div class="form-group userAddJob-form">
                        <label >Thời hạn:</label></br>
                        <input type="date" name="job_deadline" min="2020-06-01" max="2030-12-31" value="{{ $job_detail->job_deadline }}">
                    </div>
                
                    <div class="userAddJob-btn">
                        <button type="submit" class="btn btn-success float-right">Cập nhật tin tuyển dụng</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
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
                                <a href="{{ URL::to('user/business-paper') }}" class="user-infor-right-link">
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