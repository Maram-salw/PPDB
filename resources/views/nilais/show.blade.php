@extends('nilais.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2> Show Nilai</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('nilais.index') }}"> Back</a>
    </div>
    </div>
</div>
<div class="row">
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>IPA:</strong>
        {{ $nilai->ipa}}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>IPS:</strong>
        {{ $nilai->ips}}
    </div>
</div>
    <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>MTK:</strong>
        {{ $nilai->mtk }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>B.Inggris:</strong>
        {{ $nilai->b_inggris }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>B.Indonesia:</strong>
        {{ $nilai->b_indonesia }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10">
    <div class="form-group">
        <strong>Prestasi:</strong>
        {{ $nilai->prestasi }}
    </div>
</div>
</div>
@endsection
