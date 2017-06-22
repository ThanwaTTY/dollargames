<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DollargameController extends Controller
{
    public function index()
    {
            $users = DB::table('users')
            //->get();
            ->paginate(5);

          return view('index', compact('users'));
    }
}
