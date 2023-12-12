<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulationsController extends Controller {
    public function __invoke() {
        return view('regulations');
    }
}
