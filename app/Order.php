<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $fillable = ['user_id', 'name', 'email', 'phonenumber', 'amount_to_pay', 'total_amount'];

    public function user(){

    	return $this->belongsTo('App\User');
    }


    public function products(){

    	return $this->belongsToMany('App\Product')->withPivot('quantity');
    }


    //CHANGE GET BALANCE AFTER DEDUCTION::-->
    
    public function getBalance($total_amount, $amount_to_pay){

        return true;
        // $total_amount  =  intval($total_amount);

        // $amount_to_pay =  intval($amount_to_pay);

        // return $total_amount - $amount_to_pay.',000';
    }


    //method to change the date format -->

    public function changeDateFormat($date){

        return  date('m/d/Y', strtotime($date));
    }


    //Add the 14 days expiration date here --->

    public function showExpiration($currentdate){

        return date('m/d/y', strtotime($currentdate. ' + 14 days'));

    }



    public function getOrderBalance($total_amount, $amount_to_pay){

        $totalamount  = substr($total_amount, 0 , strpos($total_amount, ".00"));

        $total_amount = str_replace( ',', '', $totalamount);

        $total_amount = intval($total_amount);

        $result        = $total_amount - $amount_to_pay;

        return number_format($result, 0, '.', ',');

    }


    public function addThousand($price){


        return number_format($price, 0, '.', ',');
    }


    public function removeFloat($price){

         $price =  substr($price, 0 , strpos($price, ".00"));

         return $price;
    }
    
}
