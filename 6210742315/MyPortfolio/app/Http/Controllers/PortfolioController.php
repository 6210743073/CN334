<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio')
        ->with('portfolio', Backend::orderBy('id', 'DESC')->get());
    }

    public function store(Request $request)
    {

    }
}
