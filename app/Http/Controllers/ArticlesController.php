<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Article::paginate(2);
        return view("articles",[
            "articles"=>$articles
        ]);
    }

    public function article($id)
    {
        $article = Article::find($id);
        return view("article",[
            "article"=>$article
        ]);
    }


}
