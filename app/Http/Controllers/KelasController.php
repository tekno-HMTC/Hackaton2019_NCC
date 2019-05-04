<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['no'] = 1;
        $data['kelases'] = Kelas::all();

        return view('guru.kelas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->name = request('name');
        $kelas->save();

        return redirect()->route('guru.kelas.index')->with('success','Kelas berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['no_siswa'] = 1;
        $data['no_pengumuman'] = 1;
        $data['kelas'] = Kelas::findOrFail($id);

        return view('guru.kelas.content', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kelas'] = Kelas::findOrFail($id);

        return view('guru.kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Kelas::findOrFail($id);
        $row->name = $request->name;
        $row->save();

        return redirect()->route('guru.kelas.index')->with('success','Kelas berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->siswas()->delete();
        $kelas->pengumuman()->delete();
        $kelas->delete();

        return redirect()->back()->with('success', 'Kelas berhasil dihapus');
    }
}
