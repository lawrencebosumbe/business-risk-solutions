<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'id', 'user_id', 'iso_management_id', 'project_id', 'name', 'description',
    	'sharing_status', 'alert_status', 'layout', 'applicable_status', 
    	'recipient_alert', 'review_date_alert', 'mandatory_review_date_alert', 
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */

    protected $cast = [
    	'review_date' => 'datetime', 
    	'created_at' => 'datetime',
    	'updated_at' => 'datetime',
    ];

    /**
	* Object relationship 
	* @param void
    */

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function isomanagementsystem(){
    	return $this->belongsTo('App\IsoManagementSystem');
    }

    public function files(){
        return $this->hasMany('App\File');
    }
}
