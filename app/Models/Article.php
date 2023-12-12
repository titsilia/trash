<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        "id_article",
        "articles_title",
        "articles_text",
        // "articles_photo",
    ];
}
