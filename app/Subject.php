<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['name','description'];
    
    /**
     * Get all user subjects associated with a subject
     */
    public function userSubjects() 
    {
        return $this->hasMany(Usersubject::class);
    }
}
