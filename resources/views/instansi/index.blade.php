@extends('layouts.index')

@section('container')
@php
    $ar_judul = [
        'No',
        'Nama Instansi',
        'Action'
        ];
    $no = 1;
@endphp

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Data Instansi</h4>
            <a class="btn btn-primary btn-md" href="{{ route('instansi.create') }}" role='button'>Tambah Instansi</a>
            <br></br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        @foreach ($ar_judul as $jdl)
                        <th scope="col">{{ $jdl }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ar_instansi as $inst)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $inst->nama_instansi }}</td>
                        <td>
                            <form method="POST" action="{{ route('instansi.destroy', $inst->id_instansi) }}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-info"
                                href="{{ route('instansi.show', $inst->id_instansi) }}">Detail</a>

                                <a class="btn btn-success"
                                href="{{ route('instansi.edit', $inst->id_instansi) }}">Edit</a>

                                <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')">Delete</button>
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
