<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorSchemeSetting extends Model
{
    /**
	* The attributes that are mass assignable.
	* @var array
    */

    protected $fillable = [
    	'user_id', 'border_top_color', 'bg_color',
    	'email_bg_color', 'custom_login_border_color',   
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
}
