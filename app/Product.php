<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'identifier',
        'quantity'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
             $product->identifier = uniqid(true);
        });
    }

    public function getRouteKeyName()
    {
        return 'identifier';
    }
}
