<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsoManagementSystem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    //public $timestamps = false;

    public function posts(){
    	return $this->hasMany('App\Post');
    }

    public function folders(){
        return $this->hasMany('App\Folder');
    }

    public function files(){
        return $this->hasMany('App\File');
    }
}
