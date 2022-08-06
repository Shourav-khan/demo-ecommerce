<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id','product_name', 'product_quantity','product_description','price','product_image',
    ];

    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }
}
