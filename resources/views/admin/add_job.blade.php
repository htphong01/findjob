@extends('layouts.admin')

@section('content')
    <div class="col-sm-9 offset-1" style="padding-bottom: 100px">
        <br>
        <div>
            <a href="{{ URL::to('admin/show-job') }}" class="add-job-back-btn">
                <i class="fas fa-arrow-circle-left"></i>
                Trở về danh sách tin tuyển dụng
            </a>
        </div>
        <br>
        <span class="text-success"> {{ session('success') }}</span>
        <form action="{{ URL::to('admin/insert-job') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tên nhà tuyển dụng: </label>
                <select class="form-control" name="employer_id">
                @foreach ($employer as $emp)
                    <option value="{{ $emp->employer_id }}">{{ $emp->employer_name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
              <label>Vị trí tuyển dụng: </label>
              <input name="job_name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Ngành nghề: </label>
              <select class="form-control" name="category_id">
                @foreach ($category as $cate)
                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Tỉnh thành phố: </label>
                <select class="form-control" name="job_address">
                    @foreach ($city as $city_item)
                    <option value="{{ $city_item->id }}">{{ $city_item->city_name }}</option>
                    @endforeach
                </select>
            </div>
           
            <div class="form-group">
              <label>Mô tả công việc:</label>
              <textarea class="form-control" rows="7" style="resize: none;" name="job_description"></textarea>
            </div>
            <div class="form-group">
                <label>Yêu cầu của công việc:</label>
                <textarea class="form-control" rows="7" style="resize: none;" name="job_require"></textarea>
            </div>
            <div class="form-group">
                <label>Lợi ích:</label>
                <textarea class="form-control" rows="7" style="resize: none;" name="job_benefit"></textarea>
            </div>
            <div class="form-group">
                <label>Mức lương:</label>
                <input type="text" name="job_salary" class="form-control">
            </div>
            <div class="form-group">
                <label >Hạn nộp hồ sơ:</label></br>
                <input type="date" name="job_deadline" min="2020-06-01" max="2030-12-31">
            </div>

            <div>
                <button type="submit" class="btn btn-primary float-right">Thêm công việc mới</button>
            </div>
        </form>    
    </div>
@endsection