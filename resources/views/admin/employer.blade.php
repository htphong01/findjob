@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Danh sách nhà tuyển dụng</b></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Tên nhà tuyển dụng</th>
                    <th class="text-center">Tổng số tin tuyển dụng</th>
                    <th class="text-center">Ngày tham gia</th>
                    <th class="text-center">Chi tiết</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employers as $index=>$employer)
                      <tr>
                        <td style="padding-left: 12px;" class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $employer->employer_name }}</td>
                        <td style="text-align: center">{{ $employer->employer_total_job }}</td>
                        <td style="text-align: center">{{ $employer->created_at->format('d-m-Y') }}</td>
                        <td style="text-align: center">
                          <a href="{{ URL::to('/public-employer-infor/' .$employer->employer_id) }}" class="btn btn-success" target="_blank">
                            <i class="fas fa-info-circle" style="font-size: 20px;"></i>
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
              {!! $employers->render() !!}
            </div>
        </div>
    </div>
@endsection