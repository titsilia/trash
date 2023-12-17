<?php

namespace App\Models;
use App\Models\User;
use App\Models\Application;
use App\Models\TrashType;
use App\Models\Status;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'id_app',
        'status_app',
        'user_id',
        'address',
        'date',
        'type_trash',
        'comment',
    ];

    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trashType()
    {
        return $this->belongsTo(TrashType::class, 'type_trash');
    }

    public function statusApp()
    {
        return $this->belongsTo(Status::class, 'status_app');
    }
}
