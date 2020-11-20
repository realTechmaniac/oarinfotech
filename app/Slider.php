<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
    	'description01',
    	'description02',
		'slider_image'	
    ];
}
