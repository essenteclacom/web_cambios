<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestigacionController extends Controller {
    public function __invoke() {
        return view('investigacion');
    }
}