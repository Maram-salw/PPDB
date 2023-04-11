<?php

namespace App\Http\Controllers;

use App\Models\Tempatinggal;
use Illuminate\Http\Request;

class TempatinggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tempatinggals = Tempatinggal::latest()->paginate(5);
    return view('tempatinggals.index',compact('tempatinggals'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tempatinggals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    $request->validate([
        'kelurahan' => 'required',
        'kecamatan' => 'required',
        'kota_kabupaten' => 'required',
        'provinsi' => 'required',
        'kd_pos' => 'required',
        'negara' => 'required',
    ]);
    Tempatinggal::create($request->all());
    return redirect()->route('tempatinggals.index')
    ->with('success','Tempatinggal created successfully.');            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tempatinggal  $tempatinggal
     * @return \Illuminate\Http\Response
     */
    public function show(Tempatinggal $tempatinggal)
    {
    return view('tempatinggals.show',compact('tempatinggal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempatinggal  $tempatinggal
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempatinggal $tempatinggal)
    {
    return view('tempatinggals.edit',compact('tempatinggal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempatinggal  $tempatinggal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempatinggal $tempatinggal)
    {
    $request->validate([
        'kelurahan' => 'required',
        'kecamatan' => 'required',
        'kota_kabupaten' => 'required',
        'provinsi' => 'required',
        'kd_pos' => 'required',
        'negara' => 'required',
        ]);
        $tempatinggal->update($request->all());
        return redirect()->route('tempatinggals.index')
        ->with('success','Tempatinggal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempatinggal  $tempatinggal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tempatinggal $tempatinggal)
    {
        $tempatinggal->delete();
        return redirect()->route('tempatinggals.index')
        ->with('success','Tempatinggal deleted successfully');
    
    }
}
