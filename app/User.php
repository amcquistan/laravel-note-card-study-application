<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    
    /**
     * Get all notecards for user
     */
    public function notecards() 
    {
        return $this->hasMany(Notecard::class);
    }
    
    /**
     * Get all user subjects for a user
     */
    public function userSubjects() 
    {
        return $this->hasMany(Usersubject::class);
    }
}
