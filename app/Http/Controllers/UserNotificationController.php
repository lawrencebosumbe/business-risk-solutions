<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserNotificationController extends Controller
{
    $users = User::orderBy('id', 'desc')->get();
    return view ('usernotification', [
    	'users' => $users
    ]);
}
