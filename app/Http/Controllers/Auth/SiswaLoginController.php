<?php

namespace App\Http\Controllers\Auth;

use App\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SiswaLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'siswa';
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.siswaLogin');
    }

    public function guard()
    {
        return auth()->guard('siswa');
    }
    public function showRegisterPage()
    {
        return view('auth.siswaRegister');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:siswas',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Siswa::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('siswa-login')->with('success','Pendaftaran Berhasil');
    }

    public function login(Request $request)
    {
        if (auth()->guard('siswa')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('pageSiswa');
        }
        else{
            return redirect()->route('siswa-login')->with('fail','Pendaftaran Gagal');
        }
    }
}
