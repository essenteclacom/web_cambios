<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function __invoke (CreateContactRequest $request) {
        $save = Contact::create($request->all());
        if($save){
            #return redirect('/#contact')->with('status', 'Se guardo la informacion correctamente');
            return redirect()->back()->with('status', 'Se guardo la informacion correctamente');
        }
        return redirect()->back()->withErrors('No se pudo insertar su registro');
    }
}