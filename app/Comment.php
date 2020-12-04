<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'post_id', 'comment_content',  
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */
    protected $cast = [
    	'created_at' => 'datetime',
    	'updated_at' => 'datetime',
    ];

    //Eloquent Model Relationship
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function post(){
    	return $this->belongsTo('App\Post');
    }
}
