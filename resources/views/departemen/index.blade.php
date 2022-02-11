@extends('layouts.index')

@section('container')
@php
    $ar_judul = [
        'No',
        'Nama Departemen',
        'Action'
        ];
    $no = 1;
@endphp

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Data Departemen</h4>
            <a class="btn btn-primary btn-md" href="{{ route('departemen.create') }}" role='button'>Tambah Departemen</a>
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
                    @foreach ($ar_departemen as $dept)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dept->nama_departemen }}</td>
                        <td>
                            <form method="POST" action="{{ route('departemen.destroy', $dept->id_departemen) }}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-info"
                                href="{{ route('departemen.show', $dept->id_departemen) }}">Detail</a>

                                <a class="btn btn-success"
                                href="{{ route('departemen.edit', $dept->id_departemen) }}">Edit</a>

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
