<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentLayout extends Model
{
    use HasFactory;
    protected $fillable = [
        'news_category_id', 'layout_no', 'position'
    ];
    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
