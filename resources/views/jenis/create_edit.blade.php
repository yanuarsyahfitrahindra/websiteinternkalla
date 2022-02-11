@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit Jenis Magang</h4>
            @foreach($data as $jen)
            <form method="POST" action="{{ route('jenis.update', $jen->id_jenis) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Jenis Magang</label>
                    <input type="text" name="nama" value="{{ $jen->nama_jenis }}" class="form-control" style="background-color: white">
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
                <a href="/jenis" class="btn btn-warning">Cancel</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
