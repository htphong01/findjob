@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2>Tổng quan</h2>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          
          <div class="icon">
            <i class="nav-icon fas fa-user-friends"></i>
          </div>
          <div class="inner">
            <h3>{{ count($employers) }}</h3>

            <p><b>Nhà tuyển dụng</b></p>
          </div>
          <a href="{{ URL::to('/admin/show-employer') }}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ count($candidates) }}</h3>

            <p><b>Ứng viên</b></p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-user-tag"></i>
          </div>
          <a href="{{ URL::to('/admin/show-candidate') }}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3 style="color: #fff">{{ count($jobs) }}</h3>

            <p style="color: #fff"><b>Tin tuyển dụng</b></p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-briefcase"></i>
          </div>
          <a href="{{ URL::to('/admin/show-job') }}" class="small-box-footer" style="color: #fff !important">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ count($articles) }}</h3>

            <p><b>Bài báo</b></p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-newspaper"></i>
          </div>
          <a href="{{ URL::to('/admin/show-articles') }}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
      <div class="col-md-12">
        <h5>Top 7 ngành nghề</h5>
      </div>
      <div class="col-md-12">
        <canvas id="myChart" width="400" height="200"></canvas>
        <script>
        var label = <?php echo $categories_name ?>;
        var data = <?php echo $categories_total_job ?>;
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: label,
                datasets: [{
                    label: 'Tổng số tin tuyển dụng',
                    data: data,
                    backgroundColor: 'rgba(0,185,242,0)',
                    borderColor: 'rgb(0,185,242)',
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <h5>Doanh thu 7 ngày gần nhất</h5>
      </div>
      <div class="col-md-12">
        <canvas id="revenueChart" width="400" height="200"></canvas>
        <script>
        var label = <?php echo $revenue_date ?>;
        var data = <?php echo $revenue_revenue ?>;
        var ctx = document.getElementById('revenueChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: label,
                datasets: [{
                    label: 'Doanh thu (coins)',
                    data: data,
                    backgroundColor: 'rgba(0,185,242,0)',
                    borderColor: 'rgb(0,185,242)',
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
      </div>
    </div>
</div>
@endsection