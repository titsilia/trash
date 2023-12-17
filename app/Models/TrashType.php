<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashType extends Model
{
    protected $fillable = [
        'id',
        'type_text',
    ];
}
