@extends('layouts.index')

@section('container')
@php
    $ar_judul = [
        'No',
        'Jenis Magang',
        'Action'
        ];
    $no = 1;
@endphp

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Data Jenis Magang</h4>
            <a class="btn btn-primary btn-md" href="{{ route('jenis.create') }}" role='button'>Tambah Jenis Magang</a>
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
                    @foreach ($ar_jenis as $jen)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jen->jenis_magang }}</td>
                        <td>
                            <form method="POST" action="{{ route('jenis.destroy', $jen->id_jenis) }}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-info"
                                href="{{ route('jenis.show', $jen->id_jenis) }}">Detail</a>

                                <a class="btn btn-success"
                                href="{{ route('jenis.edit', $jen->id_jenis) }}">Edit</a>

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
