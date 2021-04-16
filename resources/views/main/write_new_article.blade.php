@extends('layouts.main')

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

@section('title')
    Chia sẻ bài viết
@endsection

@section('content')
    <div class="container new-job-content">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header article-write-title">
                      Chia sẻ kinh nghiệm nghề nghiệp
                    </div>
                    <div class="card-body">
                        <div class="text-success" style="font-size: 16px"> {{ session('success') }}</div>
                        <div>
                            <form action="{{ URL::to('/user/add-new-article') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="write_article-title" class="write-article-label">Tiêu đề:</label>
                                    <input type="text" class="form-control" id="write_article-title" name="title" style="font-size: 16px" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="write-article-label">Tải ảnh lên</label>
                                    <input type="file" style="height: 30px; font-size: 16px;" name="articlePath" accept="image/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="write_article-description" class="write-article-label">Nội dung:</label>
                                    <textarea name="description" style="font-size: 16px;" id="write_article-description" required></textarea>
                                    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
                                    <script>
                                        CKEDITOR.replace( 'description' );
                                    </script>
                                    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
        
                                    <!-- Initialize the editor. -->
                                    <script>
                                        new FroalaEditor('textarea');
                                    </script> --}}
                                </div>
                               <div class="form-group text-right">
                                   <button class="btn btn-success"
                                    style="font-size: 16px; font-weight: bold; padding: 8px 16px;" onclick="return confirm('Bạn có chắc muốn đăng bài này?')">Đăng bài</button>
                               </div>
                            </form>
                        </div>
                    </div>
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
                                            <a href="{{ URL::to('career/' .$job->job_slug) }}" style="color: #000; text-decoration: none">
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
    </div>
@endsection