@extends('layouts.main')

@section('title')
    Nạp tài khoản
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
                <div class="new-job-title">
                    <span>Nạp thêm xu</span>
                </div>
                <h4 class="text-success">{{ session('success') }}</h4>
                <ul class="nav nav-tabs">
                    <li class="nav-item" style="padding: 0">
                      <a class="nav-link active" href="#tab_1" style="color: #495057;"
                       id="tab-1" data-toggle="tab" aria-selected="true">Thẻ điện thoại</a>
                    </li>
                    <li class="nav-item" style="padding: 0">
                      <a class="nav-link" href="#tab_2" style="color: #495057;"
                       id="tab-2"  data-toggle="tab" aria-selected="true">Thẻ ngân hàng</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab-1" >
                        <div class="d-flex justify-content-center">
                            <form action="{{ URL::to('/insert-coin-card') }}"  method="POST" style="width: 60%" class="add-coin-form">
                                {{ csrf_field() }}
                                <div style="font-size: 16px;font-weight: bold; margin: 16px 0;">Thông tin thẻ cào</div>
                                <div class="form-group">
                                    <label for="card-network" style="font-size: 16px; font-weight: bold">Tên nhà mạng</label>
                                    <select name="card-network" id="card-network" class="form-control" style="font-size: 16px; height: 100%;">
                                        <option value="1">Mobiphone</option>
                                        <option value="2">Vinaphone</option>
                                        <option value="3">Viettel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="card-number" style="font-size: 16px; font-weight: bold">Mã số thẻ cào</label>
                                    <input type="password" class="form-control" style="font-size: 16px;" name="cardNumber">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px;">Thanh toán</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="d-flex justify-content-center">
                            <form action="{{ URL::to('/insert-coin-bank') }}" method="POST"  style="width: 60%" class="add-coin-form">
                                {{ csrf_field() }}
                                <div style="font-size: 16px;font-weight: bold; margin: 16px 0;">Thông tin thẻ ngân hàng</div>
                                <div class="form-group">
                                    <label for="card-network" style="font-size: 16px; font-weight: bold">Chọn ngân hàng</label>
                                    <select name="card-network" id="card-network" class="form-control" style="font-size: 16px; height: 100%;">
                                        <option value="1">VCB - Vietcombank - Ngân hàng ngoại thương</option>
                                        <option value="2">TPB - TPBank - Ngân hàng Tiên Phong</option>
                                        <option value="3">VIB - VIB - Ngân hàng Quốc Tế</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="card-number" style="font-size: 16px; font-weight: bold">Tên chủ tài khoản</label>
                                    <input type="text" class="form-control" style="font-size: 16px;">
                                </div>
                                <div class="form-group">
                                    <label for="card-number" style="font-size: 16px; font-weight: bold">Số tài khoản</label>
                                    <input type="text" class="form-control" style="font-size: 16px;">
                                </div>
                                <div class="form-group">
                                    <label for="price" style="font-size: 16px; font-weight: bold">Chọn mệnh giá</label>
                                    <select name="card-network" id="price" class="form-control" style="font-size: 16px; height: 100%;">
                                        <option value="1">10.000 VNĐ - 20 xu</option>
                                        <option value="2">20.000 VNĐ - 40 xu</option>
                                        <option value="3">50.000 VNĐ - 100 xu</option>
                                        <option value="4">100.000 VNĐ - 200 xu</option>
                                        <option value="5">200.000 VNĐ - 400 xu</option>
                                        <option value="6">500.000 VNĐ - 1000 xu</option>
                                        <option value="7">1.000.000 VNĐ - 2000 xu</option>
                                    </select>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px;">Thanh toán</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-sm-4">
                <div class="new-job-right">
                    <div class="new-job-right-title">
                        Bảng giá trị quy đổi
                    </div>
                    <div class="new-job-right-item">
                        <table class="table" style="font-size: 16px">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50%">Giá</th>
                                    <th class="text-center" style="width: 50%">Thêm xu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">10.000 VNĐ</td>
                                    <td class="text-center">20 <i class="fab fa-viacoin" style="color: #00B9F2"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-center">20.000 VNĐ</td>
                                    <td class="text-center">40 <i class="fab fa-viacoin" style="color: #00B9F2"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-center">50.000 VNĐ</td>
                                    <td class="text-center">100 <i class="fab fa-viacoin" style="color: #00B9F2"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-center">100.000 VNĐ</td>
                                    <td class="text-center">200 <i class="fab fa-viacoin" style="color: #00B9F2"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise3.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>

        </div>
        <div class="row advertise-wrap">
            <img src="{{ asset('Job/images/advertise1.png') }}" alt="" class="advertise-img">
        </div>
    </div>
@endsection