@extends('layouts.index')

@section('container')

<div class="col-md-12">
    <div class="card" style="background-color: #0C783E">
        <div class="card-header">
            <h4 class="card-title">Form Peserta Magang</h4>
            <form class="mt-4" method="POST" action="{{ route('registrasi.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="form-group" style="margin-left: 15px">
                        <label>Instansi</label>
                        <select class="form-control @error('id_instansi') is-invalid @enderror" name="id_instansi" style="width:450px; margin-right: px; margin-bottom: 10px; background-color:white" required>
                        <option value="">--Pilih Instansi</option>
                        @foreach($instansi as $inst)
                        @php
                        $sel = ( old('id_instansi') == $inst['id_instansi']) ? 'selected' : '';
                        @endphp
                        <option value="{{ $inst->id_instansi }}" {{ $sel }}>
                            {{ $inst->nama_instansi }} </option>
                        @endforeach
                        </select>
                        @error('id_instansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-left: 15px">
                        <label>Jenis Magang</label>
                        <select class="form-control @error('id_jenis') is-invalid @enderror" name="id_jenis" style="width:450px; margin-right: px; margin-bottom: 10px; background-color:white" required>
                        <option value="">--Pilih Jenis Magang</option>
                        @foreach($jenis as $jen)
                        @php
                        $sel = ( old('id_jenis') == $jen['id_jenis']) ? 'selected' : '';
                        @endphp
                        <option value="{{ $jen->id_jenis }}" {{ $sel }}>
                            {{ $jen->jenis_magang }} </option>
                        @endforeach
                        </select>
                        @error('id_jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- <div class="form-group" style="margin-left: 20px">
                        <label>Status Magang</label>
                        <div class="input-group input-group-lg-group" style="width:450px; margin-right: 20px; margin-bottom: 10px; background-color:white">
                            <div class="input-group-prepend"><span id="basic-addon1"><i class="la la-vk kt-font-brand"></i></span></div>
                            <select name="status" value="{{ old('status') }}" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="">--Pilih Status Magang</option>
                                <option value="Magang Kampus">Magang Kampus</option>
                                <option value="Magang Hire/Pribadi">Magang Hire/Pribadi</option>
                                <option value="PKL/Sekolah">PKL/Sekolah</option>
                            </select>
                        @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <!-- <span class="form-text text-muted">{{$errors->first('city_type')}}</span> -->
                    </div> --}}
                </div>

                <button id="registrasiAddThrow" class="btn btn-warning">Tambah Form</button>

                <div class="data">
                    <fieldset class="registrasiNama">
                        <div class="row">
                            <div class="form-group" style="margin-left: 20px">
                                <label>Nama Lengkap</label>
                                <input type="text" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][nama]" value="{{ old('registrasi[0][nama]') }}"
                                class="form-control @error('registrasi[0][nama]') is-invalid @enderror">
                                @error('registrasi[0][nama]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>No HP/WA</label>
                                <input type="text" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][nohp]" value="{{ old('registrasi[0][nohp]') }}"
                                class="form-control @error('registrasi[0][nohp]') is-invalid @enderror">
                                @error('registrasi[0][nohp]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>Jurusan</label>
                                <input type="text" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][jurusan]" value="{{ old('registrasi[0][jurusan]') }}"
                                class="form-control @error('registrasi[0][jurusan]') is-invalid @enderror">
                                @error('registrasi[0][jurusan]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>SBU</label>
                                <select class="form-control @error('registrasi[0][id_sbu]') is-invalid @enderror" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][id_sbu]" >
                                <option value="">--Pilih SBU</option>
                                @foreach($sbu as $sba)
                                @php
                                    $sel = ( old('id_sbu') == $sba['id_sbu']) ? 'selected' : '';
                                @endphp
                                <option value="{{ $sba->id_sbu }}" {{ $sel }}>
                                    {{ $sba->nama_sbu }}
                                </option>
                                @endforeach
                                </select>
                                @error('registrasi[0][id_sbu]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>Departemen</label>
                                <select class="form-control @error('registrasi[0][id_departemen]') is-invalid @enderror" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][id_departemen]" >
                                <option value="">--Pilih Departemen</option>
                                @foreach($departemen as $dept)
                                @php
                                    $sel = ( old('id_departemen') == $dept['id_departemen']) ? 'selected' : '';
                                @endphp
                                <option value="{{ $dept->id_departemen }}" {{ $sel }}>{{ $dept->nama_departemen }} </option>
                                @endforeach
                                </select>
                                @error('registrasi[0][id_departemen]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>Tanggal Mulai</label>
                                <input type="date" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][startdate]" value="{{ old('registrasi[0][startdate]') }}"
                                class="form-control @error('registrasi[0][startdate]') is-invalid @enderror">
                                @error('registrasi[0][startdate]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>Tanggal Selesai</label>
                                <input type="date" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][end_date]" value="{{ old('registrasi[0][end_date]') }}"
                                class="form-control @error('registrasi[0][end_date]') is-invalid @enderror">
                                @error('registrasi[0][end_date]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group" style="margin-left: 20px">
                                <label>Durasi Magang</label>
                                <input type="text" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi[0][durasi]" value="{{ old('registrasi[0][durasi]') }}"
                                class="form-control @error('registrasi[0][durasi]') is-invalid @enderror">
                                @error('registrasi[0][durasi]')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                <a href="/registrasi" class="btn btn-warning" >Cancel</a>
                <br/>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('#registrasiAddThrow').click(function(e){
        e.preventDefault();
        var fieldset = $('fieldset');
        var fieldsetLength = fieldset.length;
        console.log(fieldsetLength);

    var html = '<fieldset>' +
    '<div class="row">' +
    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Nama Lengkap</label>'+
        '<input class="form-control" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" type="text" name="registrasi['+ fieldsetLength +'][nama]">' +
    '</div>' +

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>No HP/WA</label>'+
        '<input class="form-control" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" type="text" name="registrasi['+ fieldsetLength +'][nohp]">' +
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Jurusan</label>'+
        '<input class="form-control" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" type="text" name="registrasi['+ fieldsetLength +'][jurusan]">' +
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>SBU</label>'+
        '<select class="form-control" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi['+ fieldsetLength +'][id_sbu]">'+
        '<option value="">--Pilih SBU</option>'+
        @foreach($sbu as $sbu)
        @php
            $sel = ( old('id_sbu') == $sbu['id_sbu']) ? 'selected' : '';
        @endphp
        '<option value="{{ $sbu->id_sbu }}" {{ $sel }}> {{ $sbu->nama_sbu }} </option>'+
        @endforeach
        '</select>'+
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Departemen</label>'+
        '<select class="form-control" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi['+ fieldsetLength +'][id_departemen]">'+
        '<option value="">--Pilih Departemen</option>'+
        @foreach($departemen as $dept)
        @php
            $sel = ( old('id_departemen') == $dept['id_departemen']) ? 'selected' : '';
        @endphp
        '<option value="{{ $dept->id_departemen }}" {{ $sel }}> {{ $dept->nama_departemen }} </option>'+
        @endforeach
        '</select>'+
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Tanggal Mulai</label>'+
        '<input class="form-control" type="date" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi['+ fieldsetLength +'][startdate]">' +
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Tanggal Selesai</label>'+
        '<input class="form-control" type="date" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi['+ fieldsetLength +'][end_date]">' +
    '</div>'+

    '<div class="form-group" style="margin-left: 20px">' +
        '<label>Durasi</label>'+
        '<input class="form-control" type="text" style="width: 200px; margin-right: 20px; margin-bottom: 10px; background-color:white" name="registrasi['+ fieldsetLength +'][durasi]">'+
    '</div>'+
    '<input class="form-control" type="hidden" name="fieldsetLength" value="'+ fieldsetLength +'">'+


    '</div></fieldset>';

    $('.data').append(html);
});
</script>
@endsection
