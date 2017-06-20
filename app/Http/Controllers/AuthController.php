<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auths.login');
    }

    public function register(){
        return view('auths.register');
    }

    public function store(Request $request)
    {
        $inputs = request()->except(['_token']);
        DB::table('users')
            ->insert($inputs);
        return view('index');
    }

    public function postLogin(){
        $inputs = request()->except(['_token']);
        

        if(auth()->attempt($inputs)) {
             return redirect()->intended('/');
             //return 'AAAAAAA';
        } else {
             abort(401);
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }

}
