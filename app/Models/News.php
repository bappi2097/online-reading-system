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
        return $this->belongsToMany(NewsCategory::class)->withTimestamps();
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
