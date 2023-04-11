@extends('tempatinggals.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Data Tempat tinggal</h2>
    <a href="pendaftarans">Pendaftaran</a>
    <a href="tempatinggals">Tempat-Tinggal</a>
    <a href="nilais">Nilai</a>

</div>
<div class="pull-right">
        <a class="btn btn-success" href="{{ route('tempatinggals.create') }}"> Create New Tempat tinggal</a>
    </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Kelurahan</th>
        <th>Kecamatan</th>
        <th>Kota_Kabupaten</th>
        <th>Provinsi</th>
        <th>Kd Pos</th>
        <th>Negara</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($tempatinggals as $tempatinggal)
    <tr>
        <td>{{ $tempatinggal->kelurahan }}</td>
        <td>{{ $tempatinggal->kecamatan }}</td>
        <td>{{ $tempatinggal->kota_kabupaten }}</td>
        <td>{{ $tempatinggal->provinsi }}</td>
        <td>{{ $tempatinggal->kd_pos }}</td>
        <td>{{ $tempatinggal->negara }}</td>       
        <td>
            <form action="{{ route('tempatinggals.destroy',$tempatinggal->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tempatinggals.show',$tempatinggal->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('tempatinggals.edit',$tempatinggal->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin, ingin menghapus {{$tempatinggal->kelurahan}}-{{$tempatinggal->kd_pos}}?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $tempatinggals->links() }}
@endsection
