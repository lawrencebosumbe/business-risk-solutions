<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'file_id', 'initial_approval_id', 'phase_id', 'revision',
        'attachment', 'comment', 'reviewed_by', 'review_date', 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pendingDocument(){
        return $this->belongsTo('App\PendingDocument');
    }

    public function initialApproval(){
        return $this->belongsTo('App\InitialApproval');
    }

    public function documentLifeCyclePhase(){
        return $this->belongsTo('App\DocumentLifeCyclePhase');
    }

    public function file(){
        return $this->belongsTo('App\File');
    }
}
