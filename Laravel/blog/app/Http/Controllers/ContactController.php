<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function form()
    {
        return view('pages.contacts');
    }

    public function send(Request $request)
    {

        if ($request->name == '') {
            return redirect()->back()->with(['error' => 'Il campo nome è obbligatorio.']);
        }
        if ($request->email == '') {
            return redirect()->back()->with(['error' => 'Il campo email è obbligatorio.']);
        }
        if ($request->message == '') {
            return redirect()->back()->with(['error' => 'Il campo messaggio è obbligatorio.']);
        }

        Mail::to('indirizzo@example.com')->send(new \App\Mail\Contact(
            $request->name,
            $request->email,
            $request->message,
        ));


        return redirect()->route('contacts')->with(['success' => 'Richiesta inviata con successo']);
    }
}
