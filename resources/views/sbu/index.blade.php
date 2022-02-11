@extends('layouts.index')

@section('container')
    @php
        $ar_judul = [
            'No',
            'Nama SBU',
            'Action'
            ];
        $no = 1;
    @endphp

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title"> Data SBU</h4>
            <a class="btn btn-primary btn-md" href="{{ route('sbu.create') }}" role='button'>Tambah SBU</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            @foreach ($ar_judul as $jdl)
                            <th scope="col">{{ $jdl }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ar_sbu as $sbu)
                        <tr >
                            <td>{{ $no++ }}</td>
                            <td>{{ $sbu->nama_sbu }}</td>
                            <td>
                                <form method="POST" action="{{ route('sbu.destroy', $sbu->id_sbu) }}">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-info"
                                    href="{{ route('sbu.show', $sbu->id_sbu) }}">Detail</a>

                                    <a class="btn btn-success"
                                    href="{{ route('sbu.edit', $sbu->id_sbu) }}">Edit</a>

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
</div>
@endsection
