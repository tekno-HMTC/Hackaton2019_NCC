<?php

namespace App\Http\Controllers\Siswa\Auth;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'nis' => 'required|numeric|digits_between:5,20',
            'pin' => 'required|string',
        ]);

        $user = Siswa::where([
                        ['nis', $request->nis],
                        ['pin', $request->pin]
                    ])->first();

        if(!$user)
            return redirect()->back()->with('error', 'NIS or Pin salah');
        else{
            \Auth::guard('siswa')->login($user);
            return redirect()->route('siswa.home');
        }
    }
}
