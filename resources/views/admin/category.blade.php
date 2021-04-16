@extends('layouts.admin')

@section('content')
    <form action="{{ URL::to('admin/add-category') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group col-sm-6">
            <label for="exampleInputEmail1">Tên ngành nghề: </label>
            <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Thêm mới ngành nghề</button>
            <span class="text-primary"> {{ session('success')}} </span>
            <span class="text-danger"> {{ session('error')}} </span>
        </div>
    </form>
    </br></br>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Danh mục các ngành nghề</b></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Tên ngành nghề</th>
                    <th class="text-center">Tổng số tin tuyển dụng</th>
                    <th class="text-center">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($category as $value=>$cate)
                        <tr>
                            <td class="text-center" style="padding-left: 12px;">{{ $value + 1 }}</td>
                            <td>
                                <a href="{{ URL::to('admin/show-job?category=' .$cate->category_id) }}" class="admin-category-link">{{ $cate->category_name }}</a>
                            </td>
                            <td style="text-align: center">{{ $cate->category_total_job }}</td>
                            <td style="text-align: center">
                                <a href="{{ URL::to('admin/edit-category/' .$cate->category_slug)}}" class="btn btn-primary">
                                    <i class="fas fa-edit" style="font-size: 16px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/delete-category/' .$cate->category_slug)}}"
                                    onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">
                                    <i class="far fa-trash-alt" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach     
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-12">
            <div style="display: flex; justify-content: center">
                {!! $category->render() !!}
            </div>
        </div>
    </div>
@endsection