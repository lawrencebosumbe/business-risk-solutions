<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkspacePreferenceSetting extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'preference_content', 'custom_text', 'link_title', 'link', 'preference_status'  
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

}
