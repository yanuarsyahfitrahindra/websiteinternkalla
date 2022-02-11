@extends('layouts.index')

@section('container')

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Edit Peserta Magang</h4>
            @foreach($data as $reg)
            <form method="POST" action="{{ route('registrasi.update', $reg->id_registrasi) }}">
                @csrf
                @method('put')

                <div class="row">
                    <div class="form-group" style="margin-left:15px">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ $reg->nama }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>

                    <div class="form-group" style="margin-left:15px">
                        <label>No Handphone/Whatsapp</label>
                        <input type="text" name="nohp" value="{{ $reg->nohp }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>

                <div class="form-group" style="margin-left:15px">
                    <label>Instansi</label>
                    <select class="form-control" style="background-color:white; width:450px; margin-bottom:10px" name="id_instansi">
                    <option value="">--Pilih Instansi</option>
                    @foreach($instansi as $inst)
                    <option value="{{ $inst->id_instansi }}">{{ $inst->nama_instansi }} </option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group" style="margin-left:15px">
                        <label>Jurusan</label>
                        <input type="text" name="jurusan" value="{{ $reg->jurusan }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>

                <div class="form-group" style="margin-left:15px">
                    <label>SBU</label>
                    <select class="form-control" style="background-color:white; width:450px; margin-bottom:10px" name="id_sbu">
                    <option value="">--Pilih SBU</option>
                    @foreach($sbu as $sbu)
                    <option value="{{ $sbu->id_sbu }}">{{ $sbu->nama_sbu }} </option>
                    @endforeach
                    </select>
                    </div>

                <div class="form-group" style="margin-left:15px">
                    <label>Departemen</label>
                    <select class="form-control" style="background-color:white; width:450px; margin-bottom:10px" name="id_departemen">
                    <option value="">--Pilih Departemen</option>
                    @foreach($departemen as $dept)
                    <option value="{{ $dept->id_departemen }}">{{ $dept->nama_departemen }} </option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group" style="margin-left:15px">
                        <label>Jenis Magang</label>
                        <select class="form-control" style="background-color:white; width:450px; margin-bottom:10px" name="id_departemen">
                        <option value="">--Pilih Jenis Magang</option>
                        @foreach($jenis as $jen)
                        <option value="{{ $jen->id_jenis }}">{{ $jen->jenis_magang }} </option>
                        @endforeach
                        </select>
                        </div>
{{--
                    <div class="form-group"  style="margin-left:15px">
                        <label>Status Magang</label>
                        <div class="input-group input-group-lg-group" style="background-color:white; width:450px; margin-bottom:10px">
                            <div class="input-group-prepend"></div>
                            <select name="status" value="{{ $reg->status }}" class="form-control">
                                <option value="">--Pilih Status Magang</option>
                                <option value="Magang Kampus">Magang Kampus</option>
                                <option value="Magang Hire/Pribadi">Magang Hire/Pribadi</option>
                                <option value="PKL/Sekolah">PKL/Sekolah</option>
                            </select>
                        </div>
                        <!-- <span class="form-text text-muted">{{$errors->first('city_type')}}</span> -->
                    </div> --}}

                    <div class="form-group" style="margin-left:15px">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="startdate" value="{{ $reg->startdate }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>

                    <div class="form-group" style="margin-left:15px">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="end_date" value="{{ $reg->end_date }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>

                    <div class="form-group" style="margin-left:15px">
                        <label>Durasi Magang</label>
                        <input type="text" name="durasi" value="{{ $reg->durasi }}" class="form-control" style="background-color:white; width:450px; margin-bottom:10px">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
                <a href="/registrasi" class="btn btn-warning" >Cancel</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
