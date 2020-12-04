<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Mass assignable attributes
     * @var array
    */
    
    protected $fillable = [
        'user_id', 'iso_management_id', 'project_name', 'project_desc', 'visibility_status', 
        'project_manager', 'estimated_duration',
        'started_at', 'finished_at'
    ];

    
    /**
     * Native type attributes
     * @var array
    */
    
    protected $cast = [
        'started_at' => 'datetime',
        'updated_at' => 'datetime',
        'last_opened_at' => 'datetime', 
        'created_at' => 'datetime', 
        'updated_at' => 'datetime', 
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
