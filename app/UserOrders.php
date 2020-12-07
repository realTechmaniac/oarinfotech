<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrders extends Model
{
	protected $table = 'user_orders';

    protected $fillable = ['user_id', 'name', 'email', 'phonenumber', 'amount_to_pay','total_amount','is_approved', 'due_date'];
}
