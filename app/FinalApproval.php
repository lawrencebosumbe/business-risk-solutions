<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalApproval extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'file_id', 'review_id', 'phase_id', 'revision',
        'attachment', 'comment', 'approved_by', 'approval_date', 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function review(){
        return $this->belongsTo('App\Review');
    }

    public function documentLifeCyclePhase(){
        return $this->belongsTo('App\DocumentLifeCyclePhase');
    }

    public function file(){
        return $this->belongsTo('App\File');
    }
}
