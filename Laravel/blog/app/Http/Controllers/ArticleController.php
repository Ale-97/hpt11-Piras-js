<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Articoli';
        $articles = Article::all();


        return view('account.articoli.articles', compact('title', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Crea';
        $article = "";
        $categories = \App\Models\Category::all();
        return view('account.articoli.articleEdit', compact('title', 'article', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all()); //popolo "$article" con un nuovo record per la mia tabella article,sarà popolata con i valori del mio form "$request->all()"

        $article->user_id = auth()->user()->id;

        $article->categories()->attach($request->categories);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = \Illuminate\Support\Str::slug($article->title) . '.' . $request->file('image')->extension();

            $imagePath = $request->file('image')->storeAs("public/articles/$article->id", $fileName);

            $article->image = $imagePath;
        }

        $article->save(); //mi permette di Salvare il mio record nel database



        return redirect()->back()->with(['success' => 'Articolo inserito correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('account.articoli.article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $title = 'Modifica';

        $categories = \App\Models\Category::all();

        return view('pages.articleCreateModify', compact('title', 'article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        return redirect()->route('articles.edit', $article->id)->with(['success' => 'Categoria modificata con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();

        $article->delete();

        return redirect()->back()->with(['success' => 'Articolo eliminato']);
    }
}
