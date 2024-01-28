<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $fillable = ['article_id', 'user_id', 'comment'];
    protected $appends = ['time_ago'];

    public function getTimeAgolAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}