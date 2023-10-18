<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Article;

use function Laravel\Prompts\alert;

class ArticleController extends Controller
{



    public function viwArticles()
    {
        $title = 'Articoli';
        $articles = Article::all();


        return view('pages.articles', compact('title', 'articles'));
    }

    public function viwArticle($id)
    {

        return view('pages.article', ['article' => Article::findOrFail($id)]);
    }

    public function insertData()
    {
        /* Primo metodo inserimento a database */
        /*Article::create([
            'title' => 'Titolo #1',
            'category' => 'Economia',
            'description' => 'Articolo di economia',
            'visible' => true,
            'body' => '...',
        ]);
    
        Article::create([
            'title' => 'Titolo #2',
            'category' => 'Esteri',
            'description' => 'Articolo di esteri',
            'visible' => true,
            'body' => '...',
        ]);
    
        Article::create([
            'title' => 'Titolo #3',
            'category' => 'Politica',
            'description' => 'Articolo di politica',
            'visible' => true,
            'body' => '...',
        ]);*/


        /* Secondo metodo inserimento record a database */
        $a = Article::all();
        $lastIdElement = $a[count($a) - 1]['id'];
        $article = new Article();
        $article->title = "Titolo " . $lastIdElement + 1;
        $article->category = "Sport";
        $article->description = "Articolo di sport";
        $article->body = "...";
        $article->save();

        return route('createArticle');
    }
}
