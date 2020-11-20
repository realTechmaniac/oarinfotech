<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    
    //Create a relationship between the Role and User::

    public function User(){

        return $this->belongsTo('App\User');
    }

   
}
