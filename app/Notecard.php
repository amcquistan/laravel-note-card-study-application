<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notecard extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['title','body','difficulty'];
    
    /**
     * get the user that owns the task
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * get subject for the notecard
     */
    public function subject() 
    {
        return $this->belongsTo(Subject::class);
    }
}
