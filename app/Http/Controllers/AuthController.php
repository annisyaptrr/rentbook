<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(){
        return view('auth.register');
    }

    public function storeRegist(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'addres' => 'required',
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'addres' => $request->addres,

        ]);

        return redirect ('/');   
    }

    public function Login(){
        return view('Auth.login');
    }

    public function LoginStore(Request $request){
       $user = $request->validate([
            'email'=> 'required|exists:users,email',
            'password' => 'required',
            'email.exist' => "This email doesn't exist"
        ]);

        //$user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/users');
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function logout(request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
