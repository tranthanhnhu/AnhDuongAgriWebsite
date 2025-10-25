<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'featured_image',
        'blog_category_id',
        'author',
        'is_featured',
        'fb_link',
        'status',
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
