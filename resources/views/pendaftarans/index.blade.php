@extends('pendaftarans.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Data Pendaftaran</h2>
    <a href="pendaftarans">Pendaftaran</a>
    <a href="tempatinggals">Tempat-Tinggal</a>
    <a href="nilais">Nilai</a>

</div>
<div class="pull-right">
        <a class="btn btn-success" href="{{ route('pendaftarans.create') }}"> Create New Pendaftaran</a>
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
        <th>No Registrasi</th>
        <th>No Tes</th>
        <th>Nama Lengkap</th>
        <th>JK</th>
        <th>TTL</th>
        <th>Agama</th>
        <th>Cita Cita</th>
        <th>Hobi</th>
        <th>Anak Ke</th>
        <th>Jumlah Saudara</th>
        <th>Tingg Badan</th>
        <th>Berat Badan</th>
        <th>Golongan Darah</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pendaftarans as $pendaftaran)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pendaftaran->no_tes }}</td>
        <td>{{ $pendaftaran->nama_lengkap }}</td>
        <td>{{ $pendaftaran->jk }}</td>
        <td>{{ $pendaftaran->ttl }}</td>
        <td>{{ $pendaftaran->agama }}</td>
        <td>{{ $pendaftaran->cita_cita }}</td>
        <td>{{ $pendaftaran->hobi }}</td>
        <td>{{ $pendaftaran->anak_ke }}</td>
        <td>{{ $pendaftaran->jumlah_saudara }}</td>
        <td>{{ $pendaftaran->tinggi_badan }}</td>
        <td>{{ $pendaftaran->berat_badan }}</td>
        <td>{{ $pendaftaran->golongan_darah }}</td>        
        <td>
            <form action="{{ route('pendaftarans.destroy',$pendaftaran->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('pendaftarans.show',$pendaftaran->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pendaftarans.edit',$pendaftaran->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin, ingin menghapus {{$pendaftaran->no_tes}}-{{$pendaftaran->nama_lengkap}}?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $pendaftarans->links() }}
@endsection
