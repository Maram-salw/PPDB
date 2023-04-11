@extends('nilais.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Add Nilai</h2>
</div>
<div class="pull-right">
        <a class="btn btn-primary" href="{{ route('nilais.index') }}"> Back</a>
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
<form action="{{ route('nilais.store') }}" method="POST">
@csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IPA:</strong>
                <input type="number" min='0' name="ipa" class="form-control" placeholder="IPA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IPS:</strong>
                <input type="number" min='0' name="ips" class="form-control" placeholder="IPS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MTK:</strong>
                <input type="number" min='0' name="mtk" class="form-control" placeholder="MTK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>B.Inggris:</strong>
                <input type="number" min='0' name="b_inggris" class="form-control" placeholder="B.Inggris">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>B.Indonesia:</strong>
                <input type="number" min='0' name="b_indonesia" class="form-control" placeholder="B.Indonesia">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prestasi:</strong>
                <input type="string" name="prestasi" class="form-control" placeholder="Prestasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
