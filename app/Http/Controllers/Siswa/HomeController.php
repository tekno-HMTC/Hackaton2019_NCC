<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengunguman;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $waktu = Carbon::now();
        $waktu = $waktu->toDateString();
        $pengumumans = auth()->user()->kelas->pengumuman->where('tgltampil','<=',$waktu)->where('tglselesai','>=',$waktu);

        return view('siswa.home',compact('pengumumans'));
    }

    public function logout(){
        \Auth::guard('siswa')->logout();
        return redirect('/');
    }

    public function show($id){
        $pengumuman = Pengunguman::find($id);
        return response()->json($pengumuman);
    }
}
