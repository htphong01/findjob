@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Danh sách các bài báo</b></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Tiêu đề</th>
                    <th class="text-center">Trạng thái</th>
                    <th class="text-center">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($helps as $key=>$help)
                        <tr>
                            <td class="text-center" style="padding-left: 12px;">{{ $key + 1 }}</td>
                            <td>
                                <a href="{{ URL::to('/admin/help-infor/' .$help->id) }}" style="color: #000; text-decoration: none; display: block">{{ $help->title }}</a>
                            </td>
                            <td class="text-center">
                                @if ($help->status == 0)
                                    <i>Chưa xử lý</i>
                                @else
                                    Đã xử lý
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="#"
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
                {!! $helps->render() !!}
            </div>
        </div>
    </div>
@endsection