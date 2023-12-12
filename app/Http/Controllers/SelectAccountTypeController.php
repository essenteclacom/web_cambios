<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectAccountTypeController extends Controller {
    public function __invoke() {
        return view('selectaccounttype');
    }
}