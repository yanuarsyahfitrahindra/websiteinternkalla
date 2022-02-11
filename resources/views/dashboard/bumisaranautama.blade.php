@extends('layouts.index')

@section('container')
<!doctype html>
<html lang="en">
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart" style="background-color: #0C783E; font-size:10px; font-size:10px">
            <div class="card-header">
                <h5 class="card-category">SBU</h5>
                <h4 class="card-title">Peserta Magang Bumi Sarana Utama</h4>
                <center>
                <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                    {{ $count }}
                </h1>
                </center>
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
                <h5 class="card-category">Terhitung saat ini, Bumi Sarana Utama memiliki:</h5>
                <h4 class="card-title">Peserta Magang Aktif</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $aktif }}
                    </h1>
                </center>
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
                <h5 class="card-category">Terhitung saat ini, Bumi Sarana Utama memiliki:</h5>
                <h4 class="card-title">Peserta Magang Selesai</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $nonaktif }}
                    </h1>
                </center>
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
                <h5 class="card-category">Bumi Sarana Utama memiliki:</h5>
                <h4 class="card-title">Peserta Magang Kampus</h4>
                <center>
                <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                    {{ $kampus }}
                </h1>
                </center>
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
                <h5 class="card-category">Bumi Sarana Utama memiliki:</h5>
                <h4 class="card-title">Peserta Magang Hire</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $hire }}
                    </h1>
                </center>
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
                <h5 class="card-category">Bumi Sarana Utama memiliki:</h5>
                <h4 class="card-title">Peserta PKL/Sekolah</h4>
                <center>
                    <h1 style="font-size: 80px; margin-top: 15px; margin-bottom: 10px; color: #FFB236">
                        {{ $sekolah }}
                    </h1>
                </center>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
