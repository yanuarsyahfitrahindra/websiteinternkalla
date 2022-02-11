@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Instansi</h4>
            <form method="POST" action="{{ route('instansi.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="text" name="nama" value="" class="form-control" autofocus required>
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                <a href="/instansi" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
