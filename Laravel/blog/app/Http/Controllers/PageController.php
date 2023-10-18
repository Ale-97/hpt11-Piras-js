<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = 'Welcome to '. config('app.name');

        return view('home', compact('title'));
    }

    public function whoIAm()
    {
        $description="questa è una breve descrizione";

        return view('pages.whoIAm', compact('description'));
    }
}
