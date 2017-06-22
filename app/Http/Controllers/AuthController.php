<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
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
        // $inputs = request()->except(['_token']);
        // $inputs->user()->fill([
        //     'username' => $username,
        //     'password' => $password,
        //     'name' => $name,
        //     'status' => $status
        // ]);

        //  DB::table('users')
        //      ->insert($inputs);
        // return view('index');
                $username = request('username');
                $password = bcrypt(request('password'));
                $name = request('name');
                $status = request('status');
         DB::table('users')->insert([
             'username' => $username,
             'password' => $password,
             'name' => $name,
             'status' => $status
         ]);
            $users = DB::table('users')
            //->get();
            ->paginate(5);
         return view('index', compact('users'));
        //return 'STORE';

    }

    public function postLogin(){
        $inputs = request()->except(['_token']);
        //$inputs = request()->only(['create','edit']);
        // $inputs->users()->fill([
        //     'username' => $username,
        //     'password' => Hash::make($password),
        //     'name' => $name,
        //     'status' => $status
        // ])->save();
        

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
