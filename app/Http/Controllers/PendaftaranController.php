<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    
public function index()
{
$pendaftarans = Pendaftaran::latest()->paginate(5);
return view('pendaftarans.index',compact('pendaftarans'))
->with('i', (request()->input('page', 1) - 1) * 5);
}

public function create()
{
return view('pendaftarans.create');
}

public function store(Request $request){
    $request->validate([
    'no_tes' => 'required',
    'nama_lengkap' => 'required',
    'jk' => 'required',
    'ttl' => 'required',
    'agama' => 'required',
    'cita_cita' => 'required',
    'hobi' => 'required',
    'anak_ke' => 'required',
    'jumlah_saudara' => 'required',
    'tinggi_badan' => 'required',
    'berat_badan' => 'required',
    'golongan_darah' => 'required',
    ]);
    Pendaftaran::create($request->all());
    return redirect()->route('pendaftarans.index')
    ->with('success','Pendaftaran created successfully.');
    }

    public function show(Pendaftaran $pendaftaran)
    {
    return view('pendaftarans.show',compact('pendaftaran'));
    } 

    public function edit(Pendaftaran $pendaftaran)
    {
    return view('pendaftarans.edit',compact('pendaftaran'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
    $request->validate([
        'no_tes' => 'required',
        'nama_lengkap' => 'required',
        'jk' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'cita_cita' => 'required',
        'hobi' => 'required',
        'anak_ke' => 'required',
        'jumlah_saudara' => 'required',
        'tinggi_badan' => 'required',
        'berat_badan' => 'required',
        'golongan_darah' => 'required',
    ]);
    $pendaftaran->update($request->all());
    return redirect()->route('pendaftarans.index')
    ->with('success','Pendaftaran updated successfully');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
    $pendaftaran->delete();
    return redirect()->route('pendaftarans.index')
    ->with('success','Pendaftaran deleted successfully');
    }
                    
}
