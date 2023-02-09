<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function articleCategory(){
        return $this->belongsTo(ArticleCategory::class,'article_category_id','id');
    }
    public function author(){
        return $this->belongsTo(Author::class,'author_id','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }

}