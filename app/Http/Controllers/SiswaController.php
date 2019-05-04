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
        $data['kelases'] = Kelas::all();
        return view('guru.siswa.create', $data);
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
        $siswa->NIS = request('nis');
        $siswa->name = request('name');
        $siswa->kelas_id = request('kelas_id');
        $siswa->alamat = request('alamat');
        $siswa->no_telp = request('no_telp');
        $siswa->pin = strtoupper(str_random(6));
        $siswa->save();

        return redirect()->route('guru.kelas.show', $siswa->kelas_id)->with('success', 'Siswa berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        $data['siswa'] = $siswa;
        $data['kelas'] = Kelas::findOrFail($siswa->kelas_id);
        return view('guru.siswa.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kelases'] = Kelas::all();
        $data['siswa'] = Siswa::findOrFail($id);
        return view('guru.siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->NIS = $request->NIS;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->name = $request->name;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect()->route('guru.kelas.show', $siswa->kelas_id)->with('success','Data siswa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus');
    }
}
