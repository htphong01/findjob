@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Danh sách ứng viên</b></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Tên ứng viên</th>
                    <th class="text-center">Ngày tham gia</th>
                    <th class="text-center">Chi tiết</th>
                  </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < $size; $i++)
                        <tr>
                           <td class="text-center" style="padding-left: 12px; width: 7%;">{{ $i + 1 }}</td>
                           <td >{{ $candidate[$i]->candidate_name }}</td>
                           <td style="text-align: center; width: 15%;">{{ $candidate[$i]->created_at->format('d-m-Y') }}</td>
                           <td style="text-align: center; width: 15%;">
                              <a href="{{ URL::to('/public-candidate-infor/' .$candidate[$i]->candidate_id) }}" class="btn btn-success" target="_blank">
                                <i class="fas fa-info-circle" style="font-size: 20px;"></i>
                              </a>
                           </td>
                        </tr>
                    @endfor
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-12">
            <div style="display: flex; justify-content: center">
            </div>
        </div>
    </div>
@endsection