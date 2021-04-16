@extends('layouts.main')

@section('title')
    Thống kê
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
            <div class="article-show-title">
                <span>Thống kê</span>
            </div>
            <h4>Top 7 ngành nghề hot</h4>
            <canvas id="myChart" width="100%" height="87"></canvas>
            <script>
            var label = <?php echo $categories_name ?>;
            var total_job = <?php echo $categories_total_job ?>;
            var salary = <?php echo $categories_salary ?>;
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: label,
                    datasets: [{
                        label: 'Mức lương trung bình(triệu đồng)',
                        data: salary,
                        yAxisID: 'y-axis-1',
                        backgroundColor: 'rgba(0,185,242,0)',
                        borderColor: 'red',
                        borderWidth: 3,
                        type: 'line'
                        
                    },
                    {
                        label: 'Tổng số tin tuyển dụng',
                        data: total_job,
                        yAxisID: 'y-axis-0',
                        backgroundColor: 'rgba(0,185,242,0.5)',
                        borderColor: 'rgb(0,185,242)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            stacked: true
                        }],
                        yAxes: [{
                            beginAtZero: true,
                            display: 'true',
                            stacked: true,
                            position: 'left',
                            id: 'y-axis-0',
                        }, 
                        {
                            beginAtZero: true,
                            display: 'true',
                            position: "right",
                            id: "y-axis-1",
                            max: 30,
                            min: 5,
                            
                        }]
                    },
                    animation: {
                        duration: 1000,
                        easing: 'linear'
                    },
                }
            });
            </script>
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
                               @foreach ($jobs as $job)
                                    @if ($job->job_id == $job_deadline->job_id)
                                        <a href="{{ URL::to('/career/' .$job->job_slug) }}" >
                                            {{ $job->job_name }}
                                        </a>
                                    @endif
                               @endforeach
                            </div>
                            <div class="new-job-more-company">
                                @foreach ($jobs as $job)
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
        </div>
    </div>

</div>
@endsection