<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    
    protected $fillable = [

    	'category_name', 'category_description'
    ];


    public function products(){

    	return $this->hasMany('App\Product');
    }


     public function countProducts($catgoryname){


     $result =   count(Product::where('product_category', $catgoryname)->get());


     return $result;
     
    }
    


    public function showProductsInCategory($categoryname){

       $products =  DB::table('products')->where('product_category','=', $categoryname)->get();

       return $products;

    }
}
