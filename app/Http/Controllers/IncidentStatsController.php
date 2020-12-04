<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\ColorSchemeSetting;
use App\ColorSchemeSetting as ColorSettings;
use App\DisclaimerSetting;
use App\File;
use App\Folder;
use App\IsoManagementSystem;
use App\Like;
use App\Message;
use App\Note;
use App\Post;
use App\Project;
use App\Task;
use App\User;
use App\VideoSetting;
use App\WorkspaceLogoSetting;
use App\WorkspacePreferenceSetting;

class IncidentStatsController extends Controller
{
	public function index(){
		$folders = Folder::orderBy('id', 'desc')->get();

        $users = User::orderBy('id','desc')->get();

        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('iso_management_systems', 'posts.iso_management_id', '=', 'iso_management_systems.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'iso_management_systems.name')
                     ->orderBy('posts.id', 'desc')
                     ->get();

        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('tasks.id', 'desc')
                     ->get();

        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                     ->orderBy('notes.id', 'desc')
                     ->get();

        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();

        $iso_management_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

		return view('incidentstats.index', [
			'users' => $users, 
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
		]);
	}
}
