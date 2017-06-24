<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $rules = [
            'user_id' => 'required',
            'username' => 'required',
            'balance' => 'required',
            'bankdeposit' => 'required',
            'accountnumberdeposit' => 'required',
            'accontnamedeposit' => 'required',
            'datetime' => 'required',
            'channeldeposit' => 'required',
            'tel' => 'required',
            'opinion' => 'required'
        ];

        $this->validate($request, $rules);
        $inputs = request()->except(['_token']);
        
        try {
        DB::table('deposit')
            ->insert($inputs);
        return redirect('/');
        } catch (Exception $e) {
                abort(500);
        }
    }
}
