<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        return view('deposits.index');
    }

    public function create()
    {
        return view('deposits.create');
    }

    public function store(Request $request)
    {
        $inputs = request()->except(['_token']);
        return $inputs;
    }
}
