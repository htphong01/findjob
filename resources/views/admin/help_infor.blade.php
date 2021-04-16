@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="col-sm-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><b>Phản hồi yêu cầu hỗ trợ</b></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
                @if ($help->status == 1)
                    <div class="bg-green alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Đã xử lý!</h5>
                        Yêu cầu hỗ trợ này đã được xử lý
                    </div>
                @else
                    <div class="bg-yellow alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Chưa xử lý!</h5>
                        Yêu cầu hỗ trợ này tạm thời chưa được xử lý.
                    </div>
                @endif
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope-open-text"></i>
                        </span>
                    </div>
                    <input class="form-control" value="{{ $help->title }}" readonly>
                </div>
                
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-user"></i>
                        </span>
                    </div>
                    @foreach ($users as $user)
                    @if ($user->id == $help->user_id)
                        <input class="form-control" value="{{ $user->name }}" readonly>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <label>Nội dung hỗ trợ: </label>
                <div class="help-require-content">
                    {!! $help->content !!}
                </div>
            </div>
            <div class="form-group">
                <form action="{{ URL::to('admin/reply-help-require/' .$help->id) }}" method="POST">
                    {{ csrf_field() }}
                    <label for="content">Nội dung phản hồi: </label>
                    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                    <textarea class="form-control" name="content"
                    id="content" cols="30" cols="30" rows="5" required>
                    {{ $help->reply }}
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'content' );
                    </script>
                    <div class="text-right mt-2">
                        <button class="btn btn-primary">Gửi phản hồi</button>
                    </div>
                </form>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection