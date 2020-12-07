<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Product extends Model
{
    
    use Searchable;


    public function category(){

    	return $this->belongsTo('App\Product');
    }

    public function scopeMightAlsoLike($query){

    	return $query->inRandomOrder()->take(4);
    }


    public function addThousand($price){


    	return number_format($price, 0, '.', ',');
    }
}
