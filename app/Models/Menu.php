<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "nav_menus";
    protected $fillable = [
        'name', 'news_category_id', 'position'
    ];

    public function newsCategory()
    {
        return $this->hasOne(NewsCategory::class, 'id', 'news_category_id');
    }
}
