<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenResourceController extends Controller
{
    public function index()
    {
        return view('dosen.index');
    }
}
