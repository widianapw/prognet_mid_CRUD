<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Prodi;
use Illuminate\Http\Request;
use Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
                              
    $mahasiswa = Mahasiswa::select('tb_mahasiswa.id','tb_mahasiswa.nama','tb_mahasiswa.telpon','tb_mahasiswa.email','tb_mahasiswa.gender', 'tb_prodi.prodi')->join('tb_prodi','tb_mahasiswa.id_prodi','=','tb_prodi.id')->get();
        return view("index",compact("mahasiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::get();
        return view("create",compact("prodi"));
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
            'prodi' => ['required'],
            'nama' => ['required','string','min:6'],
            'telpon' => ['required','string','min:11','max:13'],
            'email' => ['required','email'],
            'gender' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/mahasiswa/create')
                        ->withErrors($validator)
                        ->withInput();
        }


        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->telpon = $request->telpon;
        $mahasiswa->email = $request->email;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->id_prodi = $request->prodi;
        $mahasiswa->save();
        
        $mahasiswa = Mahasiswa::select('tb_mahasiswa.id','tb_mahasiswa.nama','tb_mahasiswa.telpon','tb_mahasiswa.email','tb_mahasiswa.gender', 'tb_prodi.prodi')->join('tb_prodi','tb_mahasiswa.id_prodi','=','tb_prodi.id')->get();
        return view("index", compact("mahasiswa"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::get();
        return view("edit",compact("mahasiswa","prodi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->nama = $request->nama;
        $mahasiswa->telpon = $request->telpon;
        $mahasiswa->email = $request->email;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->id_prodi = $request->prodi;
        $mahasiswa->save();
        return redirect("/mahasiswa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {   
        $mahasiswa->delete();
        return redirect("/mahasiswa");
    }
}
