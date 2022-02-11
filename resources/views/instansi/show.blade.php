@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Detail Instansi</h4>
            @foreach($ar_instansi as $inst)
            <h1 class="display-12">{{ $inst->nama_instansi }}</h1>
            @endforeach
            <td>
                <a class="btn btn-success"
                href="/instansi">Back</a>
            </td>
        </div>
    </div>
</div>
@endsection
