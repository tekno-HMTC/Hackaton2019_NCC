<?php

namespace App\Http\Controllers;

use App\Models\Pengunguman;
use App\Models\Kelas;
use Illuminate\Http\Request;

class PengungumanController extends Controller
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
        return view('guru.pengumuman.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->tgltampil);
        $pengumuman = new Pengunguman;
        $pengumuman->name = request('name');
        $pengumuman->konten = request('konten');
        $pengumuman->kelas_id = request('kelas_id');
        $pengumuman->tgltampil = date("Y-m-d", strtotime($request->tgltampil));
        $pengumuman->tglselesai = date("Y-m-d", strtotime($request->tglselesai));
        $pengumuman->save();

        return redirect()->route('guru.kelas.show', $pengumuman->kelas_id)->with('success','Pengumuman berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengunguman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunguman $pengumuman)
    {
        return view('guru.pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengunguman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunguman $pengumuman)
    {
        $data['kelases'] = Kelas::all();
        $data['pengumuman'] = $pengumuman;
        // dd($data);
        return view('guru.pengumuman.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengunguman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunguman $pengumuman)
    {
        $pengumuman->name = request('name');
        $pengumuman->konten = request('konten');
        $pengumuman->kelas_id = request('kelas_id');
        $pengumuman->tgltampil = date("Y-m-d", strtotime($request->tgltampil));
        $pengumuman->tglselesai = date("Y-m-d", strtotime($request->tglselesai));
        $pengumuman->save();

        return redirect()->route('guru.kelas.show', $pengumuman->kelas_id)->with('success','Pengumuman berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengunguman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunguman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->back()->with('success','data kelas berhasil dihapus');

    }
}
