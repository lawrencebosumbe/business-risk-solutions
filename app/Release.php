<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'awaiting_release_id', 'phase_id',
    	'file_id', 'attachment'
    ];

    /**
	* The attributes that should be cast to active types
	* @var array
    */
    protected $cast = [
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
