@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title"> Detail SBU</h4>
            @foreach($ar_sbu as $sbu)
            <h1 class="display-12">{{ $sbu->nama_sbu }}</h1>
            @endforeach
            <td>
                <a class="btn btn-success"
                href="/sbu">Back</a>
            </td>
        </div>
    </div>
</div>
@endsection
