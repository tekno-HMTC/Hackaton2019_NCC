<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->kelas_id = request('kelas_id');
        $siswa->NIS = request('NIS');
        $siswa->name = request('name');
        $siswa->alamat = request('alamat');
        $siswa->no_telp = request('no_telp');
        $siswa->pin = strtoupper(str_random(6));
        $siswa->save();

        return redirect('/home')->with('success','Siswa berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->back()->with('success','data siswa berhasil dihapus');
    }

    public function login(Request $request){
        $nis = request('nis');
        $pin = request('pin');

        $siswa = Siswa::where('NIS',$nis)->where('pin',$pin)->first();
        if (!$siswa) {
            return redirect()->back()->with('errors','NIS atau PIN salah');
        }
        session(['is_login' => 1]);

        return redirect('/dashboard');
    }
}
