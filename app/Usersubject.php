<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersubject extends Model
{
    /**
     * Each user subject belongs to a user
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Each user subject belongs to a subject
     */
    public function subject() 
    {
        return $this->belongsTo(Subject::class);
    }
}
