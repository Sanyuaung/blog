<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name', 'image', 'description', 'like_count', 'view_count'];
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('/images/' . $this->image);
    }
    public function comment()
    {
        return $this->hasMany(ArticleComment::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    public function programming()
    {
        return $this->belongsToMany(Programming::class, 'article_programming');
    }
}