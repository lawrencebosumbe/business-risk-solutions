<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeRequest extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'pending_document_id', 'attachment',
    	'new_rev_notification', 'change_reason', 
    	'assign_to', 'change_due_date'  
    ];


    //Eloquent Model Relationship
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function pendingDocument(){
    	return $this->belongsTo('App\PendingDocument');
    }
}
