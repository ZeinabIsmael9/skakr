<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'items');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'items')->distinct();
    }

    public function firstItem(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Item::class);
    }


//    public function firstItemImage()
//    {
//
//        return $this->hasOneThrough(Media::class, Item::class, 'product_id', 'model_id', 'id', 'media_id')->take(1);
//    }
//
//    public function itemImages()
//    {
//        return $this->hasManyThrough(Media::class, Item::class, 'product_id', 'model_id', 'id', 'media_id');
//    }
}
