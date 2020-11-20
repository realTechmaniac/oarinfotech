<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    

    public function category(){

    	$this->belongsTo(Category::class);
    }

    public function scopeMightAlsoLike($query){

    	return $query->inRandomOrder()->take(4);
    }
}
