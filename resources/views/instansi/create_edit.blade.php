@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit Instansi</h4>
            @foreach($data as $inst)
            <form method="POST" action="{{ route('instansi.update', $inst->id_instansi) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="text" name="nama" value="{{ $inst->nama_instansi }}" class="form-control" style="background-color: white">
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
                <a href="/instansi" class="btn btn-warning">Cancel</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
