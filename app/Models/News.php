<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = ['title', 'content', 'image'];

    public function getImageAttribute($value): string
    {
        return Storage::disk('images')->url($value);
    }
}
