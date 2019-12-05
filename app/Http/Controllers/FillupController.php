<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FillupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add() {
        return view('fillup/add');
    }
}
