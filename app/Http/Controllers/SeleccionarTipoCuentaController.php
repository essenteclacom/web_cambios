<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeleccionarTipoCuentaController extends Controller {
    public function __invoke() {
        return view('seleccionartipocuenta');
    }
}