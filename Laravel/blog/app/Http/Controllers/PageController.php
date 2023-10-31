<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function home()
    {
        $articles=Article::all();
        $title = 'Welcome to '. config('app.name');

        return view('home', compact('title','articles'));
    }

    public function whoIAm()
    {
        $description="questa è una breve descrizione";

        return view('pages.whoIAm', compact('description'));
    }
}
