<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }
    public function storeRegister(Request $request){

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
           
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('home')->with('success', 'Register berhasil!');

    }
    public function indexLogin()
    {
        return view('auth.login');
    }



public function auth(Request $request){
        $login = $request->validate([
            'email' =>['required'],
            'password' =>['required']
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect('dashboard');
            }
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login error!');
    }
}

