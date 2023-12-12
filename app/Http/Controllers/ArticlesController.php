<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Articles::paginate(2);
        return view("articles",[
            "articles"=>$articles
        ]);
    }
}
