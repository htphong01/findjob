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
                    <th>Tiêu đề bài viết</th>
                    <th class="text-center">Trạng thái</th>
                    <th class="text-center">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $key=>$article)
                        <tr>
                            <td class="text-center" style="padding-left: 12px;">{{ $key + 1 }}</td>
                            <td>
                                <a href="{{ URL::to('admin/manage-article-details/' .$article->id) }}" style="color: #000; text-decoration: none">{{ $article->name }}</a>
                            </td>
                            <td class="text-center">
                                @if ($article->status == 1)
                                    Đã duyệt
                                @else
                                    <i>Đang chờ duyệt</i>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ URL::to('admin/delete-article/' .$article->id) }}"
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
                {!! $articles->render() !!}
            </div>
        </div>
    </div>
@endsection