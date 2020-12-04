<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Likable;
    
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'iso_management_id', 'project_id', 'folder_id', 
    	'post_content', 'attachment', 'total_comments', 'total_likes', 
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

    public function isomanagementsystem(){
    	return $this->belongsTo('App\IsoManagementSystem');
    }

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function folder(){
    	return $this->belongsTo('App\Folder');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
