<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'descriptions',
        'additional_info',
        'img_1',
        'img_2',
        'img_3',
        'original_price',
        'sale_price',
        'prod_category_id',
        'is_featured',
        'review',
        'link_shoppe',
        'link_fb',
        'link_lazada',
        'status',
    ];

    public function prodCategory()
    {
        return $this->belongsTo(ProdCategory::class);
    }
}
