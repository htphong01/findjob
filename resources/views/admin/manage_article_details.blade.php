@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="text-success col-sm-12"> {{ session('success') }}</div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-10">
                <h2>{{ $article->name }}</h2>
                <div>
                    <i class="far fa-eye"></i>
                    {{ $article->views }} lượt xem
                </div>
            </div>
            <div class="col-sm-2">
                @if ($article->status == 0)
                    <button class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px;">
                        <a href="{{ URL::to('admin/accept-article/'. $article->id) }}" style="color: #fff; text-decoration: none">Duyệt</a>
                    </button>
                @else
                    <button class="btn btn-success" style="font-size: 16px;
                     font-weight: bold; padding: 4px 16px; cursor: pointer;" disabled>Đã duyệt</button>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="career-description" style="white-space: pre-wrap; word-wrap: break-word; overflow: hidden;">
                    <p>{!! $article->description !!}</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 32px">
            <div class="col-sm-10">
            </div>
            <div class="col-sm-2">
                @if ($article->status == 0)
                    <button class="btn btn-success" style="font-size: 16px; font-weight: bold; padding: 4px 16px;">
                        <a href="{{ URL::to('admin/accept-article/'. $article->id) }}" style="color: #fff;  text-decoration: none">Duyệt</a>
                    </button>
                @else
                    <button class="btn btn-success" style="font-size: 16px;
                     font-weight: bold; padding: 4px 16px; cursor: pointer;" disabled>Đã duyệt</button>
                @endif
            </div>
        </div>
    </div>
@endsection