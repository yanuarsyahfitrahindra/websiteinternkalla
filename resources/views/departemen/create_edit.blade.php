@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit Departemen</h4>
            @foreach($data as $dept)
            <form method="POST" action="{{ route('departemen.update', $dept->id_departemen) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Departemen</label>
                    <input type="text" name="nama" value="{{ $dept->nama_departemen }}" class="form-control" style="background-color: white">
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
                <a href="/departemen" class="btn btn-warning">Cancel</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
