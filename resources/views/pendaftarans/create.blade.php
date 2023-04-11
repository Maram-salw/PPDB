@extends('pendaftarans.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Add Pendaftaran</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pendaftarans.index') }}"> Back</a>
    </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('pendaftarans.store') }}" method="POST">
@csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Tes:</strong>
                <input type="number" min='0' name="no_tes" class="form-control" placeholder="No Tes">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap:</strong>
                <input type="string" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JK:</strong>
                <input type="string" name="jk" class="form-control" placeholder="JK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TTL:</strong>
                <input type="string" name="ttl" class="form-control" placeholder="TTL">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama:</strong>
                <input type="string" name="agama" class="form-control" placeholder="Agama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cita Cita:</strong>
                <input type="string" name="cita_cita" class="form-control" placeholder="Cita Cita">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hobi:</strong>
                <input type="string" name="hobi" class="form-control" placeholder="Hobi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anak Ke:</strong>
                <input type="number" min='0' name="anak_ke" class="form-control" placeholder="Anak Ke">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Saudara:</strong>
                <input type="string" name="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tinggi Badan:</strong>
                <input type="number" min='0' name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Berat Badan:</strong>
                <input type="number" min='0' name="berat_badan" class="form-control" placeholder="Berat Badan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Golongan Darah:</strong>
                <input type="string" name="golongan_darah" class="form-control" placeholder="Golongan Darah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
