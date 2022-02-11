@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit SBU</h4>
            @foreach($data as $sbu)
            <form method="POST" action="{{ route('sbu.update', $sbu->id_sbu) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama SBU</label>
                    <input type="text" name="nama" value="{{ $sbu->nama_sbu }}" class="form-control" style="background-color: white">
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
                <a href="/sbu" class="btn btn-warning">Cancel</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
