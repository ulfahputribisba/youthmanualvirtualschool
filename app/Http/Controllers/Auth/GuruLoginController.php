<?php

namespace App\Http\Controllers\Auth;

use App\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class GuruLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'guru';
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.guruLogin');
    }

    public function guard()
    {
        return auth()->guard('guru');
    }
    public function showRegisterPage()
    {
        return view('auth.guruRegister');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:gurus',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Guru::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('guru-login')->with('success','Pendaftaran Berhasil');
    }

    public function login(Request $request)
    {
        if (auth()->guard('guru')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('pageGuru');
        }
        else{
            return redirect()->route('guru-login')->with('fail','Pendaftaran Gagal');
        }
    }
}
