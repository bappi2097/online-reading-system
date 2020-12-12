<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];
    public function news()
    {
        return $this->belongsToMany(News::class)->withTimestamps();;
    }
    public function contentLayout()
    {
        return $this->hasOne(ContentLayout::class);
    }
}
