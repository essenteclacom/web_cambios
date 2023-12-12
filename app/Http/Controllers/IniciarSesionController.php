<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IniciarSesionController extends Controller {
    public function __invoke() {
        return view('iniciarsesion');
    }
}