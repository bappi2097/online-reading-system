<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'author', 'short_description', 'body', 'quote', 'slug'
    ];
    public function newsCategories()
    {
        return $this->hasMany(NewsCategory::class);
    }
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
