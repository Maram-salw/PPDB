@extends('nilais.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h2>Data Nilai</h2>
    <a href="pendaftarans">Pendaftaran</a>
    <a href="tempatinggals">Tempat-Tinggal</a>
    <a href="nilais">Nilai</a>

</div>
<div class="pull-right">
        <a class="btn btn-success" href="{{ route('nilais.create') }}"> Create New Nilai</a>
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
        <th>No</th>
        <th>IPA</th>
        <th>IPS</th>
        <th>MTK</th>
        <th>B.Inggris</th>
        <th>B.Indonesia</th>
        <th>Prestasi</th>
    </tr>
    @foreach ($nilais as $nilai)
    <tr>
        <td>{{ ++$i }}
        <td>{{ $nilai->ipa }}</td>
        <td>{{ $nilai->ips }}</td>
        <td>{{ $nilai->mtk }}</td>
        <td>{{ $nilai->b_inggris }}</td>
        <td>{{ $nilai->b_indonesia }}</td>
        <td>{{ $nilai->prestasi }}</td>
        <td>
            <form action="{{ route('nilais.destroy',$nilai->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('nilais.show',$nilai->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('nilais.edit',$nilai->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin, ingin menghapus {{$nilai->ipa}}?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $nilais->links() }}
@endsection
