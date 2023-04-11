<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilais = Nilai::latest()->paginate(5);
        return view('nilais.index',compact('nilais'))
        ->with('i', (request()->input('page', 1) - 1) * 5);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ipa' => 'required',
            'ips' => 'required',
            'mtk' => 'required',
            'b_inggris' => 'required',
            'b_indonesia' => 'required',
            'prestasi' => 'required',
            ]);
            Nilai::create($request->all());
            return redirect()->route('nilais.index')
            ->with('success','Nilai created successfully.');            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        return view('nilais.show',compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('nilais.edit',compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'ipa' => 'required',
            'ips' => 'required',
            'mtk' => 'required',
            'b_inggris' => 'required',
            'b_indonesia' => 'required',
            'prestasi' => 'required',
            ]);
            $nilai->update($request->all());
            return redirect()->route('nilais.index')
            ->with('success','Nilai updated successfully');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilais.index')
        ->with('success','Nilai deleted successfully');        
    }
}
