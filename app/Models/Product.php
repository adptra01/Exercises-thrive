<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price'
    ];
    // public static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($model) {
    //         if ($model->isDirty('price')) {
    //             $maxPrice = 99999999.99; // tentukan batas maksimum harga
    //             $price = $model->getAttribute('price');
    //             if ($price > $maxPrice) {
    //                 throw ValidationException::withMessages([
    //                     'price' => 'Harga melebihi batas maksimum',
    //                 ]);
    //             }
    //         }
    //     });
    // }
}
