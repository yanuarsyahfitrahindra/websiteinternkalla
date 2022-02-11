@extends('layouts.index')

@section('container')
<!doctype html>
<html lang="en">
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Keseluruhan</h5>
                <h4 class="card-title">Peserta Magang Kalla</h4>
                <center>
                <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                    {{ $count }}
                </h1>
                </center>
                {{-- @foreach($count as $dash)
                <center>
                <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                    {{ $dash }}
                </h1>
                </center>
                @endforeach --}}
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Terhitung saat ini</h5>
                <h4 class="card-title">Peserta Magang Aktif</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $aktif }}
                    </h1>
                </center>
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
        <div class="card-footer">
            <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Terhitung saat ini</h5>
                <h4 class="card-title">Peserta Magang Selesai</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $nonaktif }}
                    </h1>
                </center>
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
        <div class="card-footer">
            <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
        </div>
    </div>
    </div>


    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Keseluruhan</h5>
                <h4 class="card-title">Peserta Magang Kampus</h4>
                <center>
                <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                    {{ $kampus }}
                </h1>
                </center>
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Keseluruhan</h5>
                <h4 class="card-title">Peserta Magang Hire</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $hire }}
                    </h1>
                </center>
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
        <div class="card-footer">
            <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Keseluruhan</h5>
                <h4 class="card-title">Peserta PKL/Sekolah</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $sekolah }}
                    </h1>
                </center>
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                </div> --}}
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-lg-6 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Grafik</h5>
                <h4 class="card-title">Persentase Peserta Magang</h4> --}}
                {{-- <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        109
                    </h1>
                </center> --}}
            {{-- </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                    <canvas id="lineChartExample" width="751" height="190" style="display: block; width: 751px; height: 190px;" class="chartjs-render-monitor"></canvas>

                </div>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-lg-6 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">Grafik</h5>
                <h4 class="card-title">Persentase Berdasarkan Status Magang</h4> --}}
                {{-- <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        109
                    </h1>
                </center> --}}
            {{-- </div>
            <div class="card-body">
                <div class="chart-area">
                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                    <canvas id="lineChartExample" width="751" height="190" style="display: block; width: 751px; height: 190px;" class="chartjs-render-monitor"></canvas>

                </div>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div> --}}
</html>
@endsection
    {{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard | Kalla Group</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="/dashboard.css" rel="stylesheet">
    </head>

        <body>
            <div class="row">
                <div class="col-xl-2.5 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Peserta Magang Keseluruhan</div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800">1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2.5 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Peserta Magang Aktif</div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800">234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Peserta Magang Kampus</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Peserta Magang Hire/Pribadi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Peserta PKL/Sekolah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <script src="/js/dashboard.js"></script>
        </body> --}}


