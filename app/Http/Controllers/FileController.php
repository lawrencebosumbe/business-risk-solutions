<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\DB;
class FileController extends Controller
{
    public function file($id){

        //fetch project by ID
        $file = File::find($id)->get();
        
        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'posts.project_id', '=', 'projects.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();

        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();

        //pass project to view and load list view
        return view('file', [
            'posts' => $posts,
            'tasks' => $tasks,
            'file' => $file,
        ]);
        
    }
}
