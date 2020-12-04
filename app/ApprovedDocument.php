<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedDocument extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'pending_document_id', 'phase_id',
    	'iso_management_id', 'folder_id', 'originator', 
    	'owner', 'reviewer', 'doc_number', 'doc_type',
    	'doc_title', 'department', 'location', 'addition_security', 'revision', 'doc_link', 'attachment',  
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */
    protected $cast = [
    	'due_date' => 'date',
    	'original_date' => 'date',
    	'effective_date' => 'date',
    	'review_date' => 'date',
    	'created_at' => 'datetime',
    	'updated_at' => 'datetime',
    ];

    public function assignedDocumentUser(){
        return $this->hasMany('App\AssignedDocumentUser');
    }

    public function changeRequest(){
        return $this->hasMany('App\ChangeRequest');
    }

    public function pendingDocumet(){
        return $this->hasMany('App\PendingDocumet');
    }
}
}
