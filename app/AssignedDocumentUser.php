<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedDocumentUser extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'pending_document_id', 'comment',
    	'replace_user', 'user_to_replace', 
    	'user_notification_email', 'due_date'  
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

    public function pendingdocument(){
    	return $this->belongsTo('App\PendingDocument');
    }
}
