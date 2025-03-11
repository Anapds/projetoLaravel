<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobreNosController extends Controller
{
    public function sobreNos() {
        return view('site.sobreNos');
    }
}
