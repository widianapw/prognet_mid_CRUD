<?php

namespace App\Http\Controllers;

use App\Prodi;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Validator;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::get();
        return view("index_prodi",compact("prodi"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create_prodi");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prodi' => ['required','string','min:4'],
        ]);

        if ($validator->fails()) {
            return redirect('/prodi/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $prodi=new Prodi;
        $prodi->prodi = $request->prodi;
        $prodi->save();

        $prodi = Prodi::get();
        return view("index_prodi",compact("prodi"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        return view("edit_prodi",compact("prodi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        $prodi->prodi = $request->prodi;
        $prodi->save();
        return redirect("/prodi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        $a = $prodi->id;
        $Mahasiswa=Mahasiswa::where('id_prodi',$a)->delete();
        $prodi->delete();
        return redirect("/prodi");
    }
}
