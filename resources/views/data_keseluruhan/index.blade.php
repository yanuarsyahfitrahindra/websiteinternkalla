@extends('layouts.index')

@section('container')
@php
    $ar_judul = [
        'No',
        'Nama',
        'Instansi',
        'SBU',
        'Departemen',
        'Jenis Magang',
        'Durasi Magang',
        'Action'
        ];
    $no = 1;
@endphp

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="card-title">Data Seluruh Peserta Magang</h4>
                    <a class="btn btn-primary btn-md" href="{{ route('registrasi.create') }}" role='button'>Tambah Data Peserta</a>
                    <br></br>
                </div>
                <div class="col-md-4">
                    <form action="/search" method="get">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search..." style="width: 100px; margin-top:10px; margin-bottom:10px; background-color: white">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-white">Cari</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        @foreach ($ar_judul as $jdl) <th scope="col">{{ $jdl }}</th> @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ar_registrasi as $reg)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $reg->nama }}</td>
                            <td>{{ $reg->nama_instansi }}</td>
                            <td>{{ $reg->nama_sbu }}</td>
                            <td>{{ $reg->nama_departemen }}</td>
                            <td>{{ $reg->jenis_magang }}</td>
                            <td>{{ $reg->durasi }}</td>
                            <td>
                                <form method="POST" action="{{ route('registrasi.destroy', $reg->id_registrasi) }}">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-info btn-sm"
                                    href="{{ route('registrasi.show', $reg->id_registrasi) }}">Detail</a>

                                    <a class="btn btn-success btn-sm"
                                    href="{{ route('registrasi.edit', $reg->id_registrasi) }}">Edit</a>

                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin untuk menghapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
