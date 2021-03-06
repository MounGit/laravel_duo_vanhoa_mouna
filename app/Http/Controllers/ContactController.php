<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (){
        $this->authorize('adminweb');
        $contact = Contact::all();
        return view('backoffice.8contact.contact', compact('contact'));
    }

    public function edit(Contact $id){
        $this->authorize('adminweb');
        $contact = $id;
        return view('backoffice.8contact.contactEdit', compact('contact'));
    }

    public function update(Request $request, Contact $id){
        $this->authorize('adminweb');
        $contact = $id;
        $this->authorize('update', $contact);
        $request->validate([
            "address" =>"required",
            "email1" =>"required",
            "email2" =>"required",
            "phone1" =>"required",
            "phone2" =>"required"
        ]);

        $contact->address = $request->address;
        $contact->email1 = $request->email1;
        $contact->email2 = $request->email2;
        $contact->phone1 = $request->phone1;
        $contact->phone2 = $request->phone2;
        $contact->save();

        return redirect()->route('contacts.index')->with('message', 'Modifié avec succès');
    }
}

