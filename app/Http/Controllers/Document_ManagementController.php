<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkspaceLogoSetting;
use App\ColorSchemeSetting;
use App\Post;
use App\User;
use App\Folder;
use App\File;
use App\Project;
use Illuminate\Support\Facades\DB;

class Document_ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$logos = WorkspaceLogoSetting::orderBy('id', 'desc')->first();
        $logos = WorkspaceLogoSetting::orderBy('created_at', 'desc')->limit('1')->get();
        //$logos = WorkspaceLogoSetting::orderBy('id', 'desc')->first();
        $logo = DB::table('workspace_logo_settings')->orderBy('id', 'DESC')->first();
        $colors = ColorSchemeSetting::orderBy('id', 'desc')->limit('1')->get();
        $notifications = DB::table('posts')
                         ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                         ->select('posts.*', 'users.id', 'users.first_name', 'users.last_name')
                         ->limit('1')
                         ->get();
        $users = DB::table('users')->count('*');
        $posts = DB::table('posts')->count('*');
        $folders = DB::table('folders')->count('*');
        $files = DB::table('files')->count('*');

        return view('document_management', [
            'logos' => $logos,
            'logo' => $logo,
            'colors' => $colors,
            'notifications' => $notifications,
            'users' => $users,
            'posts' => $posts,
            'folders' => $folders,
            'files' => $files
        ]);
    }
    
    public function delete_logo($id){
        //update post data
        WorkspaceLogoSetting::find($id)->delete();
        //dd(WorkspaceLogoSetting::find($id));
        //store status message
        Session::flash('success_msg', 'Logo deleted successfully!');

        //redirect back to the main page
        return back();
    }

}
