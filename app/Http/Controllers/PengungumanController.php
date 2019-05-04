<?php

namespace App\Http\Controllers;

use App\Models\Pengunguman;
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
        return view('pengunguman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengunguman = new Pengunguman();
        $pengunguman->name = request('name');
        $pengunguman->konten = request('konten');
        $pengunguman->tgltampil = request('tgltampil');
        $pengunguman->tglselesai = request('tglselesai');
        $pengunguman->kelas_id = request('kelas_id');
        return redirect()->back()->with('success','Pengunguman berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengunguman  $pengunguman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunguman $pengunguman)
    {
        return view('pengunguman',compact('pengunguman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengunguman  $pengunguman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunguman $pengunguman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengunguman  $pengunguman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunguman $pengunguman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengunguman  $pengunguman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunguman $pengunguman)
    {
        $pengunguman->delete();
        return redirect()->back()->with('success','data kelas berhasil dihapus');

    }
}
