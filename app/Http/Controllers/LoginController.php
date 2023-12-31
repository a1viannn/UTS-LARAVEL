<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User; //import karna memanggil Models User
use Illuminate\Support\Str; //karna fungsi string

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/login')->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){

        User::create([
            'name' => $request->name,
            'level' => 'pelanggan',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('Login.login');
    }
}
