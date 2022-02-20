<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('logout');;
    }

    public function index()
    {
        return view('backend');
    }
}
