<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InitialApproval extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'file_id', 'document_control_review_id', 'phase_id', 'revision', 
        'comment', 'approved_by', 'attachment', 'approval_date'  
    ];

    /**
    * The attributes that should be cast to active types
    * @var array
    */

    protected $cast = [ 
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function documentControlReview(){
        return $this->belongsTo('App\DocumentControlReview');
    }

    public function file(){
        return $this->belongsTo('App\File');
    }

    public function documentLifeCyclePhase(){
        return $this->belongsTo('App\DocumentLifeCyclePhase');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
