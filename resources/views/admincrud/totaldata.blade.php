 @extends('layouts.app')
@section('content')
<!-- Example single danger button -->
<div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{ $countdataobat }}</h2>
                          <p>Online Signups</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart" width="173" height="100" class="chartjs-render-monitor" style="display: block; width: 173px; height: 100px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{ $countdatajenisobat }}</h2>
                          <p>New </p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line" width="173" height="100" class="chartjs-render-monitor" style="display: block; width: 173px; height: 100px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{ $countdataadmin }}</h2>
                          <p>Monthly </p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart" width="173" height="100" class="chartjs-render-monitor" style="display: block; width: 173px; height: 100px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{ $countdatasuplier }}</h2>
                          <p>Total Revenue</p>
                          <div class="chartjs-wrapper">

                            <canvas id="line" width="173" height="100" class="chartjs-render-monitor" style="display: block; width: 173px; height: 100px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
<br>
<div class="panel">
  <div id="chartNilai"></div>
</div>
<br>
<br>
@endsection('content')