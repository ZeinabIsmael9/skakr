<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable = ['name',
    'image'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function firstItemInFirstProduct()
    {
        return $this->hasOneThrough(
            Item::class,
            Product::class,
            'category_id', // Foreign key on the products table...
            'product_id', // Foreign key on the items table...
            'id', // Local key on the categories table...
            'id' // Local key on the products table...
        )->orderBy('products.id', 'asc')->orderBy('items.id', 'asc');
    }
}
