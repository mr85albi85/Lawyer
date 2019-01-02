<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    public function client_lawyer(){
        return $this->hasOne('App\LawyerClient', 'client_id');
    }

    public function lawyer_client(){
        return $this->hasOne('App\LawyerClient', 'lawyer_id');
    }

    public function lawfirm(){
        return $this->belongsTo('App\Lawfirm');
    }

    public function address(){
        return $this->hasOne('App\Address');
    }

    public function sender_messages(){
        return $this->hasMany('App\Message', 'sender_id');
    }

    public function receiver_messages(){
        return $this->hasMany('App\Message', 'receiver_id');
    }

    public function events(){
        return $this->hasMany('App\Event');
    }

    */
}
