<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create() {
        return view ("contact.create");
    }
    public function store(Request $request) {
        $contact = new contact;
        $contact->msg = $request->get('msg');
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        
        $contact->save();
        return redirect('contact/create')->with('status', 'Type'.$contact->subject.' added Successfully!');
    }
    public function read() {
        $contact = contact::all();
        return view('contact/read')->with(['contact' => $contact]);
    }
}
