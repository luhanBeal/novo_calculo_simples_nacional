<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimplesController extends Controller
{
    public function simplesFunc() {
        return view('site.simples');
    }
}
