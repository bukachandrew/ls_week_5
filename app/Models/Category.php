<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function products()
    {
        return $this->hasManyThrough(
            'App\Models\Product',
            'App\Models\ProductCategories',
            'category_id',
            'id',
            'id',
            'product_id');
    }

    public function link()
    {
        return $this->hasMany(ProductCategories::class, 'category_id', 'id');
    }
}
