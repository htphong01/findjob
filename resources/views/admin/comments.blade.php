@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Danh sách bình luận</b></h3><br>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="list-job-table" class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Nội dung bình luận</th>
                    <th>Bài viết</th>
                    <th class="text-center">Báo cáo</th>
                    <th class="text-center">Ẩn/Hiện</th>
                    <th class="text-center">Trả lời</th>
                  </tr>
                </thead>
                <tbody id="table-body-jobs">
                    @foreach ($comments as $index=>$comment)
                        <tr>
                            <td class="text-center" style="padding-left: 12px; width: 5%;">{{ $index + 1 }}</td>
                            <td class="admin-comment-content {{ $comment->id }} text-wrap" >{!! $comment->content !!}</td>
                            <td style="width: 30%;" class="text-wrap">{{ $comment->name }}</td>
                            <td class="text-center" style="width: 10%;">{{ $comment->report }}</td>
                            <td class="text-center" style="width: 10%;">
                                <label class="switch">
                                    @if ($comment->trashed())
                                        <input class="activity-input " type="checkbox">
                                    @else
                                        <input class="activity-input " type="checkbox" checked>
                                    @endif
                                    <span class="slider1 round1" data-id={{ $comment->id }}></span>
                                </label>
                            </td>
                            <td class="text-center" style="width: 10%;">
                                <div class="btn btn-primary admin-reply-comment-btn" data-toggle="modal" data-target="#exampleModal" data-parentID="<?php 
                                    if($comment->parent_id == 0) {
                                        echo $comment->id;
                                    } else {
                                        echo $comment->parent_id;
                                    }
                                ?>" data-id="{{ $comment->id }}" data-articleID="{{ $comment->article_id }}">
                                    <i class="fas fa-reply"></i>
                                </div>
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
                {!! $comments->render() !!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Trả lời bình luận</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="modal-comment-content"></div>
                <form id="reply-comment-form" method="POST">
                    {{ csrf_field() }}
                    <input type="text" name="articleID" hidden>
                    <div class="form-group mt-3">
                        <input type="text" name="admin_reply_comment" class="form-control" id="comment-reply" placeholder="Nhập nội dung trả lời bình luận" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary reply-comment-confirm">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
@endsection