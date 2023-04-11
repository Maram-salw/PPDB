@extends('pendaftarans.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2> Show Pendaftaran</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pendaftarans.index') }}"> Back</a>
    </div>
    </div>
</div>
<div class="row">
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>No Tes:</strong>
        {{ $pendaftaran->no_tes}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Nama Lengkap:</strong>
        {{ $pendaftaran->nama_lengkap}}
    </div>
</div>
    <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>JK:</strong>
        {{ $pendaftaran->jk }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>TTL:</strong>
        {{ $pendaftaran->ttl }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Agama:</strong>
        {{ $pendaftaran->agama }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Cita Cita:</strong>
        {{ $pendaftaran->cita_cita }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Hobi:</strong>
        {{ $pendaftaran->hobi}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Anak Ke:</strong>
        {{ $pendaftaran->anak_ke}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Jumlah Saudara:</strong>
        {{ $pendaftaran->jumlah_saudara}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Tinggi Badan:</strong>
        {{ $pendaftaran->tinggi_badan}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Berat Badan:</strong>
        {{ $pendaftaran->berat_badan}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Golongan Darah:</strong>
        {{ $pendaftaran->golongan_darah}}
    </div>
</div>
</div>
@endsection
