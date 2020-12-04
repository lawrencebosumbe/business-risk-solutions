<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
    	'user_id', 'name', 'description', 
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */
    protected $cast = [
    	'created_at' => 'datetime',
    	'updated_at' => 'datetime',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function folders(){
    	return $this->hasMany('App\Folder');
    }

    public function files(){
    	return $this->hasMany('App\File');
    }

    public function messages(){
    	return $this->hasMany('App\Message');
    }

    public function notes(){
    	return $this->hasMany('App\Note');
    }

    public function tasks(){
    	return $this->hasMany('App\Task');
    }

}
