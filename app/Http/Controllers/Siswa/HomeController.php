<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('siswa.home');
    }

    public function logout(){
        \Auth::guard('siswa')->logout();
        return redirect('/');
    }
}
