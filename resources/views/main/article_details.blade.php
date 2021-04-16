@extends('layouts.main')

@section('title')
    {{ $article->name }}
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
                <h1 style="font-size: 32px; color: #000; font-weight: bold">
                    {{ $article->name }}
                </h1>
                @if ($article->created_at)
                    <div style="color: gray; font-size: 13px; padding: 12px 0 6px; margin: 16px 0;
                    border-bottom: 1px solid rgb(167, 166, 166);" class="d-flex justify-content-between">
                        <div>
                            <i class="far fa-clock"></i>
                        {{ $article->created_at->format('d/m/Y H:i') }} (GMT+7)
                        </div>
                        <div>
                            <i class="far fa-eye"></i>
                            {{ $article->views }} lượt xem
                        </div>
                    </div>
                @endif
                <div class="career-description" style="white-space: pre-wrap; word-wrap: break-word; overflow: hidden;">
                    <p>{!! $article->description !!}</p>
                </div>
                <div class="text-right" style="font-size: 16px; font-weight: bold">
                    {{ $user->name }}
                </div>
                @if (Auth::check())
                    @if (Auth::user()->avatar)
                        <div hidden data-id="{{ Auth::user()->id }}" data-name="{{ Auth::user()->name }}" data-image="{{ Auth::user()->avatar }}" class="comment-user-infor">
                        </div>
                    @else
                        <div hidden data-id="{{ Auth::user()->id }}" data-name="{{ Auth::user()->name }}" data-image="avatar\no-user.jpg" class="comment-user-infor">
                        </div>
                    @endif
                @endif
                <div class="article-comments-block">
                    <form class="article-your-comments-block" action="" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="article_id" value="{{ $article->id }}" hidden>
                        <input type="text" name="parent_id" value="0" hidden>
                        <textarea name="content" rows="3" class="article-your-comments-area" placeholder="Viết bình luận của bạn" required></textarea>
                        <div class="text-right">
                            <button class="btn btn-your-comment" type="submit">
                                Gửi bình luận
                            </button>
                        </div>
                    </form>

                    <div class="article-user-comments">
                        <div class="user-comments-count">
                            Bình luận ({{ $comments->count() }})
                        </div>
                        <div class="article-user-comments-wrap">
                            @foreach ($comments as $comment)
                                @if ($comment->parent_id == 0)
                                    <div class="user-comments {{ $comment->id }}">
                                        <div class="user-comments-ava">
                                            @if ($comment->avatar)
                                                <img src="{{ asset($comment->avatar) }}" class="user-comments-img">
                                            @else
                                                <img src="{{ asset('avatar\no-user.jpg') }}" class="user-comments-img">
                                            @endif
                                        </div>
                                        <div class="user-comments-details">
                                            <div class="user-comments-head">
                                                <div class="user-comment-name">
                                                    {{ $comment->name }}
                                                </div>
                                                <div class="user-comment-time">
                                                    <?php
                                                    echo ago($comment->created_at);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="user-comment-content">
                                                {!! $comment->content !!}
                                            </div>
                                            <div class="user-comment-action">
                                                <div class="user-comment-liked {{ $comment->id }}" data-id="{{ $comment->id }}">
                                                    @if ($likes->count() == 0)
                                                        <i class="like-icon far fa-thumbs-up"></i>  
                                                    @else
                                                        <?php $check=0; ?>
                                                        @foreach ($likes as $like)
                                                            @if (Auth::check() && $like->comment_id == $comment->id)
                                                                <i class="fas like-icon far fa-thumbs-up"></i>
                                                                <?php $check=1; ?>
                                                            @endif
                                                        @endforeach
                                                        @if ($check == 0)
                                                            <i class="like-icon far fa-thumbs-up"></i>
                                                        @endif
                                                    @endif
                                                    <span>{{ $comment->liked }}</span> 
                                                </div>
                                                <div class="user-comment-reply" data-id="{{ $comment->id }}">
                                                    <i class="fas fa-reply"></i> Trả lời
                                                </div>
                                                <div class="user-comment-action-more-block">
                                                    @if (Auth::check() && Auth::user()->id == $comment->user_id)
                                                        <i class="fas fa-ellipsis-h user-comment-more-icon"
                                                        data-id="{{ $comment->id }}"></i>
                                                        <div class="user-comment-action-more {{ $comment->id }}">
                                                            <div class="user-comment-edit">
                                                                Chỉnh sửa
                                                            </div>
                                                            <div class="user-comment-delete" data-id="{{ $comment->id }}"
                                                                data-parentId="{{ $comment->id }}"
                                                                data-url={{ route('comment.destroy', $comment->id) }}>
                                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                                Xóa
                                                            </div>
                                                        </div>
                                                    @else 
                                                        <i class="fas fa-ellipsis-h user-comment-more-icon"
                                                        data-id="{{ $comment->id }}"></i>
                                                        <div class="user-comment-action-more {{ $comment->id }}">
                                                            <div class="user-comment-edit user-comment-report"  data-id="{{ $comment->id }}">
                                                                Báo cáo vi phạm
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <form class="article-your-sub-comments-block {{ $comment->id }}" action="" method="POST">
                                                {{ csrf_field() }}
                                                <input type="text" name="article_id" value="{{ $article->id }}" hidden>
                                                <input type="text" name="parent_id" value="{{ $comment->id }}" hidden>
                                                <textarea name="content" rows="1" class="article-your-comments-area {{ $comment->id }}" placeholder="Viết bình luận của bạn" required></textarea>
                                                <div class="text-right">
                                                    <button class="btn btn-your-comment" type="submit">
                                                        Gửi bình luận
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="user-comments-sub-block {{ $comment->id }}">
                                            @foreach ($comments as $sub_comment)
                                                @if ($sub_comment->parent_id == $comment->id)
                                                    <div class="user-comments user-comments-sub {{ $sub_comment->id }}">
                                                        <div class="user-comments-ava">
                                                            @if ($sub_comment->avatar)
                                                                <img src="{{ asset($sub_comment->avatar) }}" class="user-comments-img">
                                                            @else
                                                                <img src="{{ asset('avatar\no-user.jpg') }}" class="user-comments-img">
                                                            @endif
                                                        </div>
                                                        <div class="user-comments-details">
                                                            <div class="user-comments-head">
                                                                <div class="user-comment-name">
                                                                    {{ $sub_comment->name }}
                                                                </div>
                                                                <div class="user-comment-time">
                                                                    <?php
                                                                        echo ago($sub_comment->created_at);
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="user-comment-content">
                                                                {!! $sub_comment->content !!}
                                                            </div>
                                                            <div class="user-comment-action">
                                                                <div class="user-comment-liked {{ $sub_comment->id }}" data-id="{{ $sub_comment->id }}">
                                                                    @if ($likes->count() == 0)
                                                                        <i class="like-icon far fa-thumbs-up"></i>
                                                                    @else
                                                                        <?php $check1=0; ?>
                                                                        @foreach ($likes as $like)
                                                                        @if (Auth::check() && $like->comment_id == $sub_comment->id)
                                                                            <i class="fas like-icon far fa-thumbs-up"></i>
                                                                            <?php $check1=1; ?>
                                                                        @endif
                                                                        @endforeach
                                                                        @if ($check1==0)
                                                                            <i class="like-icon far fa-thumbs-up"></i>
                                                                        @endif
                                                                    @endif
                                                                    <span>{{ $sub_comment->liked }}</span> 
                                                                </div>
                                                                <div class="user-comment-reply" data-id="{{ $comment->id }}">
                                                                    <i class="fas fa-reply"></i> Trả lời
                                                                </div>
                                                                <div class="user-comment-action-more-block">
                                                                    @if (Auth::check() && Auth::user()->id == $sub_comment->user_id)
                                                                        <i class="fas fa-ellipsis-h user-comment-more-icon"
                                                                        data-id="{{ $sub_comment->id }}"></i>
                                                                        <div class="user-comment-action-more {{ $sub_comment->id }}">
                                                                            <div class="user-comment-edit">
                                                                                Chỉnh sửa
                                                                            </div>
                                                                            <div class="user-comment-delete" 
                                                                            data-id="{{ $sub_comment->id }}" data-parentId="{{ $comment->id }}"
                                                                            data-url={{ route('comment.destroy', $sub_comment->id) }}>
                                                                                @csrf
                                                                                Xóa
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    @else 
                                                                    <i class="fas fa-ellipsis-h user-comment-more-icon"
                                                                    data-id="{{ $sub_comment->id }}"></i>
                                                                    <div class="user-comment-action-more {{ $sub_comment->id }}">
                                                                        <div class="user-comment-edit user-comment-report" data-id="{{ $sub_comment->id }}">
                                                                            Báo cáo vi phạm
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                       
                    </div>
                </div>
                <div style="margin-top: 32px;">
                    <a href="{{ URL::to('article-details/' .$suggestArticle->slug) }}" style="font-size: 16px; color: #000;">
                        <b>Xem thêm <i>"{{ $suggestArticle->name }}"</i></b>
                    </a>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="new-job-right">
                    <div class="new-job-right-title">
                        Việc làm gấp
                    </div>
                    <div class="new-job-right-item">
                        @foreach ($jobs_deadline as $job_deadline)
                            <div class="new-job-more-link">
                                <div class="new-job-more-name">
                                   @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                            <a href="{{ URL::to('/career/' .$job->job_slug) }}">
                                                {{ $job->job_name }}
                                            </a>
                                        @endif
                                   @endforeach
                                </div>
                                <div class="new-job-more-company">
                                    @foreach ($all_jobs as $job)
                                    @if ($job->job_id == $job_deadline->job_id)
                                        @foreach ($employers as $employer)
                                            @if ($employer->employer_id == $job->employer_id)
                                                {{ $employer->employer_name }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>

                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise3.jpg') }}" alt="" style="width: 100%">
                </div>
                <div class="new-job-right-advertisement mt-4">
                    <img src="{{ asset('Job/images/advertise2.jpg') }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>

        {{-- Thông báo cáo báo  --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="article-modal-btn" hidden>
        </button>
          
          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px">Thông báo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="font-size: 16px">
                   Bình luận đã được báo cáo vi phạm
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 16px">Close</button>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection