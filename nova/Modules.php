<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function notes(){
        return $this->hasMany('App\Note');
    }

    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function folders(){
        return $this->hasMany('App\Folder');
    }

    public function files(){
        return $this->hasMany('App\File');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function workspacepreferencesettings(){
        return $this->hasMany('App\WorkspacePreferenceSetting');
    }

    public function videosettings(){
        return $this->hasMany('App\VideoSetting');
    }

    public function solorschemesettings(){
        return $this->hasMany('App\ColorSchemeSetting');
    }

    public function disclaimersettings(){
        return $this->hasMany('App\DisclaimerSetting');
    }

    public function workspacelogosettings(){
        return $this->hasMany('App\WorkspaceLogoSetting');
    } 
    
}
