<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleSave extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'article_id'];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}