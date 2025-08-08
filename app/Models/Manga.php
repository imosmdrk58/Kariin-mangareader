<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = ['title', 'cover', 'description', 'author'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

