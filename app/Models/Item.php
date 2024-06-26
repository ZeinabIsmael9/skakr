<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Item extends Model  implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $guarded = [];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function images()
    {
        return $this->getMedia('item_images');
    }
    public function getImageUrl()
    {
        return $this->getMedia('item_images')->first()->original_url;
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('item_images');
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => round($value),
        );
    }

}
