@extends('tempatinggals.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2> Show Tempat tinggal</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('tempatinggals.index') }}"> Back</a>
    </div>
    </div>
</div>
<div class="row">
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Kelurahan:</strong>
        {{ $tempatinggal->kelurahan}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Kecamatan:</strong>
        {{ $tempatinggal->kecamatan}}
    </div>
</div>
    <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>Kota Kabupaten:</strong>
        {{ $tempatinggal->kota_kabupaten }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Kd Pos:</strong>
        {{ $tempatinggal->kd_pos }}
    </div>
</div>
</div>
@endsection
