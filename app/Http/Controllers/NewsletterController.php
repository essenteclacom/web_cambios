<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsletterRequest;
use App\Models\Newsletter;

class NewsletterController extends Controller {
    public function __invoke (CreateNewsletterRequest $request) {
        $save = Newsletter::create($request->all());
        if($save){
            return redirect()->back()->with('status', 'Se guardo la informacion correctamente');
        }
        return redirect()->back()->withErrors('No se pudo insertar su registro');
    }
}