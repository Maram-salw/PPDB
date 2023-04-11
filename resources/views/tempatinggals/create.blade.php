@extends('tempatinggals.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Add Tempat tinggal</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('tempatinggals.index') }}"> Back</a>
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
<form action="{{ route('tempatinggals.store') }}" method="POST">
@csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelurahan:</strong>
                <input type="string" name="kelurahan" class="form-control" placeholder="Kelurahan ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kecamatan:</strong>
                <input type="string" name="kecamatan" class="form-control" placeholder="Kecamatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kota Kabupaten:</strong>
                <input type="string" name="kota_kabupaten" class="form-control" placeholder="Kota Kabupaten">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Provinsi:</strong>
                <input type="string" name="provinsi" class="form-control" placeholder="Provinsi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kd Pos:</strong>
                <input type="number" min='0' name="kd_pos" class="form-control" placeholder="Kd Pos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Negara:</strong>
                <input type="string" name="negara" class="form-control" placeholder="Negara">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
