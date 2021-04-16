@extends('layouts.main')

@section('title')
    {{ $candidate->name }}
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
                <div class="card">
                    <div class="card-header article-write-title">
                      Thông tin ứng viên
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 public-candidate-avatar">
                                <div>
                                    <img src="{{ asset($candidate->avatar) }}" alt="" class="public-candidate-avatar-img">
                                </div>
                                <div>
                                    @if ($candidate->candidate_cv)
                                        <a href="{{ asset($candidate->candidate_cv) }}" class="btn btn-success public-candidate-cv" target="_blank">Xem CV người dùng</a>
                                    @else
                                        <span class="public-candidate-cv"><i>Người này chưa đăng tải CV</i></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <table class="table table-bordered" style="font-size: 16px;">
                                    <tbody>
                                        <tr>
                                            <td class="public-candidate-label">Tên ứng viên</td>
                                            <td class="text-left">{{ $candidate->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="public-candidate-label">Ngày sinh</td>
                                            <td class="text-left">
                                                <?php
                                                    echo $_firstDate = date("d-m-Y", strtotime($candidate->dateOfBirth));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="public-candidate-label">Giới tính</td>
                                            <td class="text-left">
                                                @if ($candidate->gender == 1)
                                                    Nam
                                                @else
                                                    Nữ                                
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="public-candidate-label">Địa chỉ</td>
                                            <td class="text-left">{{ $candidate->address }}</td>
                                        </tr>
                                        <tr>
                                            <td class="public-candidate-label">Số điện thoại</td>
                                            <td class="text-left">{{ $candidate->phoneNumber }}</td>
                                        </tr>
                                        <tr>
                                            <td class="public-candidate-label">Email</td>
                                            <td class="text-left">{{ $candidate->email }}</td>
                                        </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="new-job-right">
                    <div class="new-job-right-title">
                        Việc làm mới nhất
                    </div>
                    <div class="new-job-right-item">
                        @foreach ($jobs as $job_deadline)
                            <a href="{{ URL::to('/career/' .$job_deadline->job_slug) }}" class="new-job-more-link">
                                <div class="new-job-more-name">
                                   @foreach ($all_jobs as $job)
                                        @if ($job->job_id == $job_deadline->job_id)
                                            {{ $job->job_name }}
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
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection