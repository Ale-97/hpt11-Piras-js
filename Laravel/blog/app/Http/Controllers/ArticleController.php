<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use function Laravel\Prompts\alert;

class ArticleController extends Controller
{
    private $articles = [];

    public function __construct()
    {
        $this->articles = \App\Custom\Data::articles();
    }

    public function viwArticles()
    {
        $title = 'Articoli';

        $articles = array_filter($this->articles,function($article){return $article['visible']===true;});

    
        return view('pages.articles', compact('title', 'articles'));


    }

    public function viwArticle($id)
    {    
        if(array_key_exists($id,$this->articles)){
        return view('pages.article', ['article' => $this->articles[$id]]);}else
        {
            echo '<script type="text/javascript">
            window.onload = function () { alert("Questo articolo non è più disponibile");}
            </script>'; 
          return redirect()->route('articles');
        }
    }
}
