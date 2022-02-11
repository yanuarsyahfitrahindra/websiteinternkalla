@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Jenis Magang</h4>
            <form method="POST" action="{{ route('jenis.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama jenis Magang</label>
                    <input type="text" name="jenis_magang" value="" class="form-control" autofocus required>
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                <a href="/jenis" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
