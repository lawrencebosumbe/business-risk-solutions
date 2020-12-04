<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */
    protected $fillable = [
    	'user_id', 'delay', 'delay_unit', 
    	'has_training', 'self_training',
        'started_at', 'completed_at'
    ];

    /*
    To prevent the error SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list'
    */
    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
