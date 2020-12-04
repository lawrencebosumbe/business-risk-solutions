<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'project_id', 'task_id', 'msg_content', 'attachment',
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

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function task(){
    	return $this->belongsTo('App\Task');
    }
}
