@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit Departemen</h4>
            @foreach($ar_departemen as $dept)
            <h1 class="display-12">{{ $dept->nama_departemen }}</h1>
            @endforeach
            <td>
                <a class="btn btn-success"
                href="/departemen">Back</a>
            </td>
        </div>
    </div>
</div>
@endsection
