@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Detail Peserta Magang</h4>
            @foreach($ar_registrasi as $reg)
            <h1 class="display-12">{{ $reg->nama }}</h1>
            <h6>Nomor Handhphone/Whatsapp       : {{ $reg->nohp }}</h6>
            <h6>Institusi                       : {{ $reg->nama_instansi }}</h6>
            <h6>Jurusan                         : {{ $reg->jurusan }}</h6>
            <h6>SBU                             : {{ $reg->nama_sbu }}</h6>
            <h6>Departemen/Divisi               : {{ $reg->nama_departemen }}</h6>
            <h6>Jenis Magang                    : {{ $reg->jenis_magang }}</h6>
            <h6>Tanggal Mulai                   : {{ $reg->startdate }}</h6>
            <h6>Tanggal Berakhir                : {{ $reg->end_date }}</h6>
            <h6>Durasi                          : {{ $reg->durasi  }}</h6>
            @endforeach
            <td>
                <a class="btn  btn-success"
                href="/registrasi">Back</a>
            </td>
        </div>
    </div>
</div>
@endsection
