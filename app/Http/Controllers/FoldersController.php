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
use Illuminate\Database\Eloquent\Builder;
use App\TermCondition;

class FoldersController extends Controller
{
    /*
    --------------------------------------------------------------
    FOLDERS
    --------------------------------------------------------------
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fetch all posts data
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $folder = Folder::find($id);
        $file = File::find($id);
        
        //$folders = Folder::orderBy('id', 'desc')->get();
        $folders = Folder::with('files', 'user')->orderBy('id', 'desc')->limit(20)->get();
        
        /*
        $folders = DB::table('folders')
                    ->leftJoin('files', 'files.folder_id', '=', 'folders.id')
                    ->select('folders.name', 'folders.id', 'folders.created_at', DB::raw('count(*) as file_id'))
                    ->where('folders.id', '>', 0)
                    ->groupBy('files.id', 'folders.id', 'folders.name', 'folders.created_at')
                    ->get();
        */
        
        /*
       $folders = DB::select('SELECT folders.id, folders.created_at, files.id AS file_id, files.filename, folders.name
        FROM folders INNER JOIN files ON folders.id = files.folder_id');  
       */

       //print_r("<pre>");var_dump($folders); die();

        
        $files[] = DB::table('files')
                    ->select(DB::raw('count(*) as file_id, files.id'))
                    ->groupBy('files.id')
                    ->get();
        
        $users = User::orderBy('id','desc')->get();

        /*
        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('iso_management_systems', 'posts.iso_management_id', '=', 'iso_management_systems.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'iso_management_systems.name')
                     ->orderBy('posts.id', 'desc')
                     ->get();
        */
        $posts = Post::with('comments', 'user', 'project')->orderBy('id', 'desc')->limit(20)->get();
        /*$projects = DB::table('posts')
                       ->leftJoin('projects', 'posts.project_id', '=', 'projects.id')
                       ->select('posts.*', 'projects.project_name')
                       ->get();*/
        
        $task_projects = DB::table('projects')->select('projects.*')->get();

        $projects = DB::table('projects')
                       ->leftJoin('posts', 'posts.project_id', '=', 'projects.id')
                       ->leftJoin('tasks', 'tasks.project_id', '=', 'projects.id')
                       ->leftJoin('users', 'projects.user_id', '=', 'users.id')
                       ->select('projects.*', 'projects.project_name', 'projects.id', 'tasks.project_id', 'users.profile_image', 'users.first_name', 'users.last_name')
                       ->get();
                       
        //$projects = Project::with('tasks', 'user')->orderBy('id', 'desc')->limit(20)->get();

        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.id', 'projects.project_name')
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
        //$logos = WorkspaceLogoSetting::orderBy('id', 'desc')->first();
        //dd($logos);
        
        /*
        $comments = DB::table('comments')
                    ->leftJoin('users', 'comments.user_id', '=', 'users.id')
                    ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
                    ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                    ->get();
        */

        //dd($users);
        //print_r("<pre>"); var_dump($users);
        //pass folder data to view and load list view
    
        return view('folders.index', [
            'users' => $users, 
            'folders' => $folders,
            'folder' => $folder,
            'file' => $file,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'projects' => $projects,
            'task_projects' => $task_projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create_folder(){

        $folders = Folder::orderBy('id', 'desc')->get();

        $isomanagements = IsoManagementSystem::orderBy('name')
                   ->get();
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        return view('folders.create_folder', [
            'folders' => $folders,
            'isomanagements' => $isomanagements,
            'logos' => $logos
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_folder(Request $request)
    {
        
        //validate data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'iso_management_id' => 'required'
        ]);
        
        $form_data = array(
            'name'          =>   $request->name,
            'description'       =>   $request->description,
            'iso_management_id' =>   $request->iso_management_id,
            'user_id'           =>   Auth::user()->id,
        );

        Folder::create($form_data);

        //store status message
        Session::flash('success_msg', 'Folder added successfully!');
        
        //redirect back to the main page
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function folder1($id)
    {
        //fetch folder by ID
        $folder = Folder::find($id)->get();

        //fetch file by ID
        $file = File::find($id);
        $file23 = DB::select("SELECT * FROM `files` where `id` = $id "); 

        $users = User::orderBy('id','desc')->get();

        //fetch user by ID
        $user = User::find($id);

        //Fetch all folders data
        $files = DB::table('files')
                    ->leftJoin('folders', 'folders.id', '=', 'files.folder_id')
                    ->select('files.*', 'folders.id')   
                    ->where('files.folder_id', '=', $id)                
                    ->get();

        $folders = Folder::orderBy('id','desc')->get();
        $my_folders = Folder::with('files', 'user')->orderBy('id', 'desc')->limit(20)->get();
        
        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('folders', 'posts.folder_id', '=', 'folders.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'folders.name')
                     ->orderBy('id', 'desc')
                     ->get();

        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();
        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                     ->orderBy('notes.id', 'desc')
                     ->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //dd($folder->id);

        return view('folders.folder', [
            'folders' => $folders,
            'files' => $files,
            'posts' => $posts,
            'tasks' => $tasks,
            'folder'=> $folder,
            'notes' => $notes,
            'colors' => $colors,
            'logos' => $logos,
            'file23' => $file23
        ]);
    }

    public function folder($id){

        //fetch project by ID
        $users = User::orderBy('id','desc')->get();

        /*
        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'posts.project_id', '=', 'projects.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();
                     */
        $posts = Post::with('comments', 'user', 'project')->orderBy('id', 'desc')->limit(20)->get();
        
        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();

        $user = User::find($id);
                //fetch folder by ID
        $folder = Folder::find($id);
        $folders = Folder::with('files', 'user')->orderBy('id', 'desc')->limit(20)->get();
        //fetch user by ID
        $user = User::find($id);
        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                     ->orderBy('notes.id', 'desc')
                     ->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //dd($posts); die();

        return view('folders.folder', [
            'posts' => $posts,
            'tasks' => $tasks,
            'folder'=> $folder,
            'folders'=> $folders,
            'notes' => $notes,
            'colors' => $colors,
            'logos' => $logos,
            'users' => $users, 
            'user' => $user,
        ]);
        
    }
  
    public function folder_details($id){
      $file = DB::select("SELECT * FROM `files` where `id` = $id "); 
      return view('folders.folder_details', [
            'file' => $file
        ]);
    }

     /*
    --------------------------------------------------------------
    FILES
    --------------------------------------------------------------
    */

    //Load form view
    public function files(){    
        $files = File::orderBy('id', 'desc')->get();
 
        //pass folder data to view and load list view
        return view('folders.files', [
            'files' => $files,
        ]);

    }

    public function getNextDocNumber(){
    
    // Get the last created document
    $lastDoc = File::orderBy('id', 'desc')->first();

    /*
    In a case where no record is found get 1 as a 
    virtual record to generate document number.
    */
    if(is_null($lastDoc)){
         /*
    create an object counter (number) to store document ID and
    initialiaze it to 1.
    */
    /*
    $id = File::find(1);
    $number = $id;
    */
    //assign and add the number with Doc ID 
    $number += File::find(1);
 
    /*
    concatenate BRS-DFT- with the last inserted Doc ID
    that will end with 3 numbers.
    */
    return 'BRS-DFT-' . sprintf('%03d', intval($number) + 1);
    }else{
       /*
    create variable number to store document ID
    initialiaze it to 0.
    */
    $number = 0;

    //assign and add the number with Doc ID 
    $number += $lastDoc->id;
 
    /*
    concatenate BRS-DFT- with the last inserted Doc ID
    that will end with 3 numbers.
    */
    return 'BRS-DFT-' . sprintf('%03d', intval($number) + 1); 
    }
    
        
    }

    //Load form view
    public function create_file() { 
        $files = DB::table('files')
                    ->leftJoin('folders', 'files.folder_id', '=', 'folders.id')
                    ->select('files.*','files.folder_id', 'folders.name')
                    ->orderBy('files.id', 'desc')
                    ->get();

        $folders = Folder::orderBy('id','desc')->get();
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $iso_system = IsoManagementSystem::orderBy('id','desc')->get();
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //pass folder data to view and load list view
        return view('folders.create_file', [
            'users' => $users, 
            'projects' => $projects,
            'folders' => $folders,
            'files' => $files,
            'iso_system' => $iso_system,
            'logos' => $logos
        ]);
    }
        

    public function insert_file(Request $request){
        $request->validate([
            'filename' => 'required',
            'department' => 'required',
            'originator' => 'required',
            'location' => 'required',
            'additional_security' => 'required',
            'owner' => 'required',
            'reviewer' => 'required',
            'electronic_distribution' => 'required',
            'hardcopy' => 'required',
            'category' => 'required',
            'system_element' => 'required',
            'original_date' => 'required',
            'effective_date' => 'required',
            'url' => 'required',
            'review_date' => 'required'
        ]);

        $url = $request->file('url');
        $new_url = rand() . '.' . $url->getClientOriginalExtension();
        $url->move(public_path('/uploads/files/'), $new_url);

         /*
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/images/'), $new_name);
        */

        //$doc_number = "BRS-DFT-0";

        $form_data = array(
            'url' =>   $new_url,
            'filename' => $request->filename,
            'revision' => $request->revision,
            'department' => $request->department,
            'originator' => $request->originator,
            'location' => $request->location,
            'additional_security' => $request->additional_security,
            'owner' => $request->owner,
            'reviewer' => $request->reviewer,
            'electronic_distribution' => $request->electronic_distribution,
            'hardcopy' => $request->hardcopy,
            'category' => $request->category,
            'system_element' => $request->system_element,
            'description' => $request->description,
            'original_date' => $request->original_date,
            'effective_date' => $request->effective_date,
            'review_date' => $request->review_date,
            'user_id'  =>  Auth::user()->id,
            'iso_management_id' => $request->iso_management_id,
            'folder_id' => $request->folder_id,
            'project_id' => $request->project_id,
            'doc_number' => $this->getNextDocNumber()
        );
        
        File::create($form_data);
         

        //$folders = array();
        //$files[] = DB::select('SELECT total_files FROM folders')
                // ->where('id', '=', $id);
        //$total_files = 0;

        //foreach($files as $file){
        
        //}
        $id = 'folder_id';

        if (Folder::where('$id', '=', 'folder_id')) {
           DB::table('folders')->increment('total_files', 1);
       }
        
        //store status message
        Session::flash('success_msg', 'File added successfully!');
        
        //redirect back to the main page
        return back();
    }

    
    public function file1($id){

        //fetch project by ID
        $file = File::find($id)->get();
        $users = User::orderBy('id','desc')->get();

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

        $user = User::find($id);
                //fetch folder by ID
        $folder = Folder::find($id);

        //fetch user by ID
        $user = User::find($id);

        //Fetch all folders data
        $files = DB::table('files')
                    ->leftJoin('folders', 'folders.id', '=', 'files.folder_id')
                    ->select('files.*', 'folders.id')   
                    ->where('files.folder_id', '=', $id)                
                    ->get();

        $folders = Folder::orderBy('id','desc')->get();
        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                     ->orderBy('notes.id', 'desc')
                     ->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //dd($posts); die();

        return view('folders.file', [
            'folders' => $folders,
            'files' => $files,
            'posts' => $posts,
            'tasks' => $tasks,
            'folder'=> $folder,
            'notes' => $notes,
            'colors' => $colors,
            'logos' => $logos,
            'users' => $users, 
            'file' => $file,
            'user' => $user,
        ]);
        
    }

    public function file($id){
      $file = DB::select("SELECT * FROM `files` where `id` = $id "); 
      return view('folders.file', [
            'file' => $file
        ]);
    }
    
    public function fileDetails($id){
      $file = DB::select("SELECT * FROM `files` where `id` = $id "); 
      return view('folders.fileDetails', [
            'file' => $file
        ]);
    }
    
    public function delete_file($id){
        //update post data
        File::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'File deleted successfully!');

        return back();
    }
    
    
    /*
    --------------------------------------------------------------
        PROJECTS
    --------------------------------------------------------------
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function add_project() {
        
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $iso_managements = IsoManagementSystem::orderBy('id','desc')->get();
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        return view('folders.add_project', [
            'users' => $users, 
            'projects' => $projects,
            'iso_managements' => $iso_managements,
            'logos' => $logos
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_project(Request $request)
    {
        //validate data
        $this->validate($request, [
            'project_name' => 'required',
            'project_manager' => 'required',
            'started_at' => 'required',
            'finished_at' => 'required',
            'project_desc' => 'required',
            'visibility_status' => 'required',
        ]);
        
        $project = array(
            'project_name'  =>   $request->project_name,
            'project_manager'  =>   $request->project_manager,
            'started_at'  =>   $request->started_at,
            'finished_at'  =>   $request->finished_at,
            'project_desc'   =>   $request->project_desc,
            'visibility_status' => $request->visibility_status,
            'user_id'           =>   Auth::user()->id,
            'iso_management_id'  =>   $request->iso_management_id,
        );
        
        //insert project data
        Project::create($project);
        
        //store status message
        Session::flash('success_msg', 'Project added successfully!');
        
        //redirect back to the main page
        return redirect()->route('folders.index');
    }

    /**
     * Display project by ID
     *
     * @return \Illuminate\Http\Response
     */

    public function project($id){
        //fetch project by ID
        $project = Project::find($id)->get();
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();

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
        /*
        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'notes.project_id', '=', 'projects.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();
                     */
        $user = User::find($id);

        $folders = DB::table('folders')
                    ->leftJoin('projects', 'projects.id', '=', 'folders.project_id')
                    ->select('folders.*', 'projects.id')    
                    ->where('project_id', '=', $id)             
                    ->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //pass project to view and load list view
        return view('folders.project', [
            'users' => $users, 
            'projects' => $projects,
            'posts' => $posts,
            'tasks' => $tasks,
            'project' => $project,
            'user' => $user,
            'folders' => $folders,
            'logos' => $logos
        ]);
        
    }


    /*
    --------------------------------------------------------------
        POSTS
    --------------------------------------------------------------
    */
    public function my_discussions(){
        $posts = DB::table('posts')
                    ->leftJoin('iso_management_systems', 'posts.iso_management_id', '=', 'iso_management_systems.id')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'posts.project_id', '=', 'projects.id')
                     ->leftJoin('folders', 'posts.folder_id', '=', 'folders.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'iso_management_systems.name')
                     ->orderBy('id', 'desc')
                     ->get();

        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $iso_management_systems = IsoManagementSystem::orderBy('id','desc')->get();
        //pass posts data to view and load list view
        return view('folders.my_discussions', [
            'users' => $users, 
            'posts' => $posts,
            'projects' => $projects,
            'iso_management_systems' => $iso_management_systems,         
        ]);

    }
    
    public function insert_discussion(Request $request){
        
        //validate data
        $this->validate($request, [
            'post_content' => 'required',
            'attachment' => 'required'
        ]);
        
        //get post data
        $post = $request->all();
        
        //insert post data
        Post::create($post);
        
        //redirect back to the main page
        return back();
    }

    public function post($id){
        $post = Post::find($id)->get();
        return view('folders.post', [
            'post' => $post
        ]);
    }

    /*
    --------------------------------------------------------------
        COMMENTS (REPLIES)
    --------------------------------------------------------------
    */

    public function comments($id){
        $comments = DB::table('comments')
                    ->leftJoin('users', 'comments.user_id', '=', 'users.id')
                    ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
                    ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
                    ->where('post_id', '=', $id)
                    ->get();
        return view('folders.index', [
            'comments' => $comments
        ]);

    }
    
    
    public function insert_comment(Request $request){
        
        //validate data
        $this->validate($request, [
            'comment_content' => 'required',
        ]);
        
        $comment = new Comment;
        $comment->comment_content = $request->comment_content;
        $comment->user()->associate($request->user());
        $post = Post::find($request->post_id);
        $post->update(['total_comments' => 1]);
        $post->comments()->save($comment);

        //$comment = $request->all();
        //$comment['user_id'] = Auth::user()->id;

        //Comment::create($comment);
        
        Session::flash('success_msg', 'Comment success!');
        //redirect back to the main page
        return redirect()->route('folders.index');
    }

    public function add_comment(Request $request) {
    $rules = array (
            'comment_content' => 'required'
    );
    
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (
                    
                'errors' => $validator->getMessageBag ()->toArray ()
        ) );
        else {
            $data = new Data ();
            $data->comment_content = $request->comment_content;
            $data->user()->associate($request->user());
            $data->Post::find($request->post_id);
            $data->update(['total_comments' => 1]);
            $data->save ();
            return response ()->json ( $data );
        }
    }
    
    /*
    --------------------------------------------------------------
        MESSAGES
    --------------------------------------------------------------
    */

    public function add_message(){
        $messages = Message::orderBy('id','desc')->get();
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        
        //pass data to view and load list view
        return view('folders.my_discussions', [
            'users' => $users, 
            'messages' => $messages,
            'projects' => $projects
        ]);
    }
    
    public function send_message(Request $request){
        
        //validate data
        $this->validate($request, [
            'msg_content' => 'required',
            'attachment' => 'required'
        ]);
        
        //get messages from request
        $message = $request->all();
        $message['user_id'] = Auth::user()->id;
        
        //insert post data
        Message::create($message);
        
        //redirect back to the main page
        return back();
    }

    /*
    --------------------------------------------------------------
        TASKS
    --------------------------------------------------------------
    */

    public function my_tasks(){
        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();
        
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();

        //pass data to view and load list view
        return view('folders.my_tasks', [
            'users' => $users, 
            'tasks' => $tasks,
            'projects' => $projects
        ]);
    }

    public function insert_task(Request $request){
        
        //validate data
        $this->validate($request, [
            'name' => 'required',
            'deadline' => 'required'
        ]);
        
        //get tasks from request
        $task = $request->all();
        $task = $request->project_id;
        $task['user_id'] = Auth::user()->id;
        
        //insert post data
        Task::create($task);
        
        //redirect back to the main page
        return back();
    }

    public function add_task(Request $request) {
        //validate data
        $this->validate($request, [
            'name' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'attachment' => 'required'
        ]);
        
        $task = new Task;
        $task->user_id = Auth::user()->id;
        $task->project_id = $request->project_id;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->attachment = $request->attachment;
        $task->deadline = $request->deadline;
        $task->save();
        
        //store status message
        Session::flash('success_msg', 'New task was added successfully!');
        
        //redirect back to the main page
        return back();
    }
    
    /*
    --------------------------------------------------------------
        NOTES
    --------------------------------------------------------------
    */

    public function notes(){
        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->leftJoin('folders', 'notes.folder_id', '=', 'folders.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'folders.name')
                     ->orderBy('id', 'desc')
                     ->get();
        
        $users = User::orderBy('id','desc')->get();
        $folders = Folder::orderBy('id','desc')->get();

        //pass data to view and load list view
        return view('folders.notes', [
            'users' => $users, 
            'notes' => $notes,
            'folders' => $folders
        ]);
    }

    public function insert_note(Request $request){
        //fetch project by ID
        //$folder = Folder::find($id);

        //validate data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $note = $request->all();
        $note['user_id'] = Auth::user()->id;
        //$note['folder_id'] = $folder->id;
        Note::create($note);

        return back();
        
    }

    public function delete_note($id){
        //update post data
        Note::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Note deleted successfully!');

        return back();
    }

    /*
    --------------------------------------------------------------
        SETTINGS
    --------------------------------------------------------------
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $colors = ColorSchemeSetting::orderBy('id', 'desc')->get();
        $disclaimers = DisclaimerSetting::orderBy('id', 'desc')->get();
        $video_settings = VideoSetting::orderBy('id', 'desc')->limit(1)->get();
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit(1)->get();
        $list_logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('3')->get();
        $worspace_preferences = WorkspacePreferenceSetting::orderBy('id', 'desc')->get();
        $terms = TermCondition::orderBy('id', 'desc')->limit(1)->get();

        $users = User::orderBy('users.id','desc')->get();
        
        $posts = DB::table('posts')
                     ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                     ->leftJoin('folders', 'posts.folder_id', '=', 'folders.id')
                     ->select('posts.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'folders.name')
                     ->orderBy('posts.id', 'desc')
                     ->get();

        $tasks = DB::table('tasks')
                     ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                     ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image')
                     ->orderBy('tasks.id', 'desc')
                     ->get();

        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'notes.name')
                     ->orderBy('users.id', 'desc')
                     ->get();

        return view('folders.settings', [
            'colors' => $colors, 
            'disclaimers' => $disclaimers,
            'video_settings' => $video_settings,
            'logos' => $logos,
            'worspace_preferences' => $worspace_preferences,
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'list_logos' => $list_logos,
            'video_settings' => $video_settings,
            'terms' => $terms
        ]);

    }

    /*
    --------------------------------------------------------------
    COLOR SCHEMES
    --------------------------------------------------------------
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setColors(Request $request)
    {
        //validate data
        $this->validate($request, [
            'border_top_color' => 'required',
            'bg_color' => 'required',
            'email_bg_color' => 'required',
            'custom_login_border_color' => 'required',
        ]);

        $color_settings = $request->all();
        $color_settings['user_id'] = Auth::user()->id;

        ColorSchemeSetting::create($color_settings);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');

        return back();
    }

    /*
    ----------------------------------------------------------
    UPLOAD LOGO
    ----------------------------------------------------------
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadLogo(Request $request)
    {
        //validate data
        $this->validate($request, [
            'logo' => 'required|image|max:2048',
        ]);

        $image = $request->file('logo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/logos/'), $new_name);

        $form_data =  array(
            'logo'      => $new_name , 
            'user_id'   =>   Auth::user()->id,
        );

        WorkspaceLogoSetting::create($form_data);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');
        
        //redirect back to the main page
        return back();
    }

    /*
    ----------------------------------------------------------
    UPLOAD LOGOS
    ----------------------------------------------------------
    */

    public function uploadLogos(Request $request)
    {

        $images = $request->file('logo');

        foreach($images as $image){
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/logos/'), $new_name);
        }

        $image = array(
            'logo'             =>   $new_name,
            'user_id'           =>   Auth::user()->id,
        );

        WorkspaceLogoSetting::create($image);

        //store status message
        Session::flash('success_msg', 'File added successfully!');
        
        //redirect back to the main page
        return back();
    }

    /*
    ------------------------------------------------------------
    PREFERENCES
    ------------------------------------------------------------
    */
    
    public function add_preference(Request $request){
        
        //validate data
        $this->validate($request, [
            'preference_content' => 'required',
            'custom_text'        => 'required',
            'link_title'         => 'required',
            'link'               => 'required',
            'preference_status'  => 'required',
        ]);
        
        //get messages from request
        $preference = $request->all();
        $preference['user_id'] = Auth::user()->id;

        //insert preferences
        WorkspacePreferenceSetting::create($preference);

        //store status message
        Session::flash('success_msg', 'Workspace Preferences successfully saved!');
        
        //redirect back to the main page
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload_disclaimer(Request $request)
    {
        //validate data
        $this->validate($request, [
            'disclaimer_file' => 'required',
        ]);

        $disclaimer = $request->file('disclaimer_file');
        $new_name = rand() . '.' . $disclaimer->getClientOriginalExtension();
        $disclaimer->move(public_path('/uploads/files/'), $new_name);

        $form_data =  array(
            'disclaimer_file' => $new_name , 
            'user_id' =>   Auth::user()->id,
        );

        DisclaimerSetting::create($form_data);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');
        
        //redirect back to the main page
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload_video(Request $request)
    {
        //validate data
        $this->validate($request, [
            'disclaimer_video' => 'required',
        ]);

        $disclaimer = $request->file('disclaimer_video');
        $new_name = rand() . '.' . $disclaimer->getClientOriginalExtension();
        $disclaimer->move(public_path('/uploads/videos/'), $new_name);

        $form_data =  array(
            'disclaimer_video' => $new_name , 
            'user_id'         =>   Auth::user()->id,
        );

        DisclaimerSetting::create($form_data);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');
        
        //redirect back to the main page
        return back();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadVideoSettings(Request $request)
    {
        //validate data
        $this->validate($request, [
            'filename' => 'required',
        ]);

        $video = $request->file('filename');
        $new_name = rand() . '.' . $video->getClientOriginalExtension();
        $video->move(public_path('/uploads/video_settings/'), $new_name);

        $form_data =  array(
            'filename' => $new_name , 
            'user_id'  =>   Auth::user()->id,
        );

        VideoSetting::create($form_data);

        //store status message
        Session::flash('success_msg', 'Video uploaded successfully!');
        
        //redirect back to the main page
        return back();
    }
    
    
     /*
    ----------------------------------------------------------
    UPLOAD TERMS
    ----------------------------------------------------------
    */

    public function upload_terms(Request $request)
    {
        //validate data
        $this->validate($request, [
            'terms' => 'required',
        ]);

        $term = $request->file('terms');
        $new_name = rand() . '.' . $term->getClientOriginalExtension();
        $term->move(public_path('/uploads/terms/'), $new_name);

        $form_data =  array(
            'terms' => $new_name , 
            'user_id'         =>   Auth::user()->id,
        );

        TermCondition::create($form_data);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');
        
        //redirect back to the main page
        return back();
    }
}
