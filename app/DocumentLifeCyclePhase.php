<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentLifeCyclePhase extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'name',
    ];

    /*
    To prevent the error SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list'
    */
    public $timestamps = false;
    
    /**
	* Relationship
    */

    public function files(){
    	return $this->hasMany('App\File');
    }

    
}
