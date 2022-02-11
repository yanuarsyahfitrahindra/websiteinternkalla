@extends('layouts.index')

@section('container')
<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Tambah SBU</h4>
            <form method="POST" action="{{ route('sbu.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama SBU</label>
                    <input type="text" name="nama" value="" class="form-control" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                <a href="/sbu" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
