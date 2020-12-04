<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'iso_management_id', 'project_id', 'folder_id', 'phase_id', 'filename', 'description',
    	'url', 'doc_number', 'originator', 'owner', 'reviewer', 'department', 'location', 'additional_security', 'doc_link', 'revision', 'electronic_distribution', 'hardcopy', 'category', 'system_element', 'due_date', 'original_date', 'effective_date', 'resource_date', 'review_date',
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */
    protected $cast = [
    	'created_at' => 'datetime',
    	'updated_at' => 'datetime',
    ];

    /**
	* Object relationship 
	* @param void
    */

    /*
    To prevent the error SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list'
    */
    public $timestamps = false;
    
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function folder(){
    	return $this->belongsTo('App\Folder');
    }

    public function isoManagementSystem(){
        return $this->belongsTo('App\IsoManagementSystem');
    }

    public function documentLifeCyclePhase(){
        return $this->belongsTo('App\DocumentLifeCyclePhase');
    }

    public function documentControlReview(){
        return $this->hasMany('App\DocumentControlReview');
    }
}
