<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentControlReview extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'file_id', 'phase_id', 'doc_number', 
        'assigned_to', 'revision', 'comment', 'review_date',
        'due_date', 'completed_date'  
    ];

    /*
    To prevent the error SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list'
    */
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function file(){
        return $this->belongsTo('App\File');
    }

    public function initialApproval(){
        return $this->hasMany('App\InitialApproval');
    } 

}
