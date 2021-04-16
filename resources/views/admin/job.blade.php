@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Danh sách tin tuyển dụng</b></h3><br>
                <div class="col-12 form-group" style="padding-left:0;">
                    <form action="{{ URL::to('admin/show-job') }}" class=" d-flex justify-content-between" style="width: 100%;" method="GET">
                        <select name="category" id="category-select" class="form-control" style="width: 40%;" onchange="this.form.submit()">
                            <option value="0">Tất cả ngành nghề</option>
                            @foreach ($categories as $cate)
                                @if ($cate->category_id == $category)
                                    <option value="{{ $cate->category_id }}" selected>{{ $cate->category_name }}</option>
                                @else
                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <div>
                            <span>Hiển thị số dòng: </span>
                            <select name="row" id="row-select" onchange="this.form.submit()">
                                @for ($i = 5; $i <= 20; $i = $i + 5)
                                    @if ($i == $row)
                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @else
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="list-job-table" class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Vị trí tuyển dụng</th>
                    <th class="text-center">Thời hạn</th>
                    <th class="text-center">Hành động</th>
                  </tr>
                </thead>
                <tbody id="table-body-jobs">
                    @if ($jobs->count() == 0)
                        <tr>
                            <th colspan="4" class="text-center">Hiện chưa có tin tuyển dụng nào</th>
                        </tr>                        
                    @endif
                    @foreach ($jobs as $key=>$job)
                        <tr>
                            <td class="text-center" style="padding-left: 12px;">{{ $key + 1 }}</td>
                            <td>
                                <a target="_blank" style="color: #000; text-decoration: none;"
                                href="{{ URL::to('/career/' .$job->job_slug) }}">
                                {{ $job->job_name }}
                                </a>
                            </td>
                            <td style="text-align: center">
                                @foreach ($job_detail as $item)
                                    @if ($item->job_id == $job->job_id)
                                    <?php
                                    echo $_firstDate = date("d-m-Y", strtotime($item->job_deadline));
                                    ?>
                                    @endif
                                @endforeach
                            </td>
                            <td style="text-align: center">
                                <a href="{{ URL::to('/admin/edit-job/' .$job->job_id) }}"  class="btn btn-primary">
                                    <i class="fas fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('/admin/delete-job/' .$job->job_id) }}"
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
                {!! $jobs->render() !!}
            </div>
        </div>
    </div>
@endsection