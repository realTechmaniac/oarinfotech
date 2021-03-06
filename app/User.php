<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phonenumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){

        return $this->hasOne(Role::class);
    }



    public function checkUser(){

        $user = auth()->user();

        if ($user->role_id === 1 ) {
            
            return redirect('/admindashoard');
        }

        return redirect('/userdashboard');
    }


    public function orders(){

        return $this->hasMany('App\Order');
    }

    
    public function changeDateFormat($date){

        return  date('m/d/Y', strtotime($date));
    }
}
