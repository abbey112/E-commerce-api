<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const UNAVAILABLE_PRODUCT = '0';
    const AVAILABLE_PRODUCT = '1';

    public function Categories() 
    {
        return $this->belongsToMany(Category::class);

    }
}
