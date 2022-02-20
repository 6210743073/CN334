<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend;

class BackendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('logout');;
    }

    public function index()
    {
        return view('backend')
        ->with('portfolio', Backend::orderBy('id', 'DESC')->get());
    }

    public function edit(Request $request)
    {
        $portfolio = Backend::find(1);
        $portfolio->description = $request->description;
        $portfolio->save();
        return redirect('/backend');
    }
}
