<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReklamaceController extends Controller
{
    //
    public function index()
    {
        return view('reklamace.index');
    }
}
