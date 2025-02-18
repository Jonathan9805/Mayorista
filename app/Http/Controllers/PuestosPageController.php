<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuestosPageController extends Controller
{
    public function index()
    {
        return view('puestos-page');
    }
}
