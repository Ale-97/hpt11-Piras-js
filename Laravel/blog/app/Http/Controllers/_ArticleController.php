<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
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

        return $this->viwArticles();
    }




    public function create()
    {
        return view('pages.articleCreate');
    }


    public function store(StoreArticleRequest $request) // la "Request $request" ci permette di prendere tutti i valori del form
    {
        $article = Article::create($request->all()); //popolo "$article" con un nuovo record per la mia tabella article,sarà popolata con i valori del mio form "$request->all()"

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = \Illuminate\Support\Str::slug($article->title) . '.' . $request->file('image')->extension();

            $imagePath = $request->file('image')->storeAs("public/articles/$article->id", $fileName);

            $article->image = $imagePath;

            $article->save(); // mi permeytte di salavre il mio record nel database
        }
        return redirect()->back()->with(['success' => 'Articolo inserito correttamente']);
    }
}
