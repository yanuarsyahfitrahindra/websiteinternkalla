@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Detail Jenis Magang</h4>
            @foreach($ar_jenis as $jen)
            <h1 class="display-12">{{ $jen->nama_jenis }}</h1>
            @endforeach
            <td>
                <a class="btn btn-success"
                href="/jenis">Back</a>
            </td>
        </div>
    </div>
</div>
@endsection
