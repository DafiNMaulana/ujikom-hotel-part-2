@extends('stisla.master')
@section('tittle')
Statistik
@endsection
@section('main')
    <section class="section">
      <div class="section-header">
        <h1>Statistik</h1>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-user-shield"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>  Admin</h4>
              </div>
              <div class="card-body">
                {{ $admin }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>   Resepsionis</h4>
              </div>
              <div class="card-body">
                {{ $resepsionis }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-receipt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Unpaid</h4>
              </div>
              <div class="card-body">
                {{ $unpaid }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-bed"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kamar</h4>
              </div>
              <div class="card-body">
                {{ $kamar }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>laporan pemesanan kamar bulanan</h4>
                        {{-- <div class="card-header-action">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Week</a>
                            <a href="#" class="btn">Month</a>
                        </div>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" class="chartjs-render-monitor" height="182"></canvas>
                        <div class="statistic-details mt-sm-4">
                        {{-- <div class="statistic-details-item">
                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                            <div class="detail-value">$243</div>
                            <div class="detail-name">Today's Sales</div>
                        </div>
                        <div class="statistic-details-item">
                            <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                            <div class="detail-value">$2,902</div>
                            <div class="detail-name">This Week's Sales</div>
                        </div>
                        <div class="statistic-details-item">
                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                            <div class="detail-value">$12,821</div>
                            <div class="detail-name">This Month's Sales</div>
                        </div>
                        <div class="statistic-details-item">
                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                            <div class="detail-value">$92,142</div>
                            <div class="detail-name">This Year's Sales</div>
                        </div> --}}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Check IN</h4>
                  </div>
                  <div class="card-body">
                    {{ $checkin }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Check OUT</h4>
                  </div>
                  <div class="card-body">
                    {{ $checkout }}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
@include('admin.data_chart', ['data_chart'=>$data_chart])
@endsection



