<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\ColorSchemeSetting;
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

/*
App\ColorSchemeSetting class is already imported in different controller
and cannot be imported twice.
We are changing this class name by aliasing it with different name.
*/
use App\ColorSchemeSetting as ColorSettings;

/*
-------------------------------------------------------------------------------
    HEALTH SAFETY MANAGEMENT CONTROLLER EXTENDING CONTROLLER
-------------------------------------------------------------------------------
*/

class Health_Safety_ManagementController extends Controller
{

    /*
    ----------------------------------------------------
     * Display a listing of the resource.
     * @param void
     * @return list of resources
     ---------------------------------------------------
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $folders = Folder::orderBy('id','desc')->get();

        return view('health_safety_management.health_safety_management', ['users' => $users,
            'projects' => $projects,
            'folders' => $folders,
        ]);

    }

    /*
    --------------------------------------------------------
    PROJECTS
    --------------------------------------------------------
    */


    /*
    ----------------------------------------------------
     * save the project
     * @param void
     * @return list of resources
     ---------------------------------------------------
     */
    public function add_project() {

        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $iso_man = IsoManagementSystem::orderBy('id','desc')->get();
        return view('health_safety_management.add_project', [
            'users' => $users,
            'projects' => $projects,
            'iso_man' => $iso_man
        ]);

    }

    /*
    ----------------------------------------------------
     * create new project
     * @param request
     * @return response
     ---------------------------------------------------
     */
    public function insert_project(Request $request)
    {
        //validate data
        $this->validate($request, [
            'project_name' => 'required',
            'project_manager' => 'required',
            'estimated_duration' => 'required',
            'started_at' => 'required',
            'finished_at' => 'required',
            'project_desc' => 'required',
            'visibility_status' => 'required',
        ]);

        //get project data
        $project = $request->all();

        //insert project data
        Project::create($project);

        //store status message
        Session::flash('success_msg', 'Project added successfully!');

        //redirect back to the main page
        return redirect()->route('health_safety_management');
    }

    /*
    ----------------------------------------------------
     * get a project by ID
     * @param project ID
     * @return project and related objects
     ---------------------------------------------------
     */
    public function project($id){
        //fetch project by ID
        $project = Project::find($id);
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

        $notes = DB::table('notes')
                     ->leftJoin('users', 'notes.user_id', '=', 'users.id')
                     ->leftJoin('projects', 'notes.project_id', '=', 'projects.id')
                     ->select('notes.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
                     ->orderBy('id', 'desc')
                     ->get();

        $user = User::find($id);

        $folders = DB::table('folders')
                    ->leftJoin('projects', 'projects.id', '=', 'folders.project_id')
                    ->select('folders.*', 'projects.id')
                    ->where('project_id', '=', $id)
                    ->get();

        //pass project to view and load list view
        return view('health_safety_management.project', [
            'users' => $users,
            'projects' => $projects,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'project' => $project,
            'user' => $user,
            'folders' => $folders
        ]);

    }

    /*
    ----------------------------------------------------------
    MY DISCUSSIONS (POSTS)
    ----------------------------------------------------------
    */

    /*
    ----------------------------------------------------
     * store discussions
     * @param void
     * @return discussion object
     ---------------------------------------------------
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
        return view('health_safety_management.my_discussions', [
            'users' => $users,
            'posts' => $posts,
            'projects' => $projects,
            'iso_management_systems' => $iso_management_systems,
        ]);

    }

    /*
    ----------------------------------------------------
     * create a new discussion
     * @param request
     * @return response
     ---------------------------------------------------
     */
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

    /*
    -------------------------------------------------------------
    COMMENTS
    -------------------------------------------------------------
    */

    /*
    ----------------------------------------------------
     * create a new comment
     * @param request
     * @param comment ID
     * @return response
     ---------------------------------------------------
     */
    public function insert_comment(Request $request, $id){

        //validate post data
        $this->validate($request, array(
            'comment_content' => 'required|min:5|max:2000'
        ));

        //select the existing post ID from database
        //$user = auth->user()->id;

        //select the existing post ID from database
        $post = Post::find($id);

        $comment = $request->all();

        //instantiate comment object
        //$comment = new Comment();

        //set comment properties
        //$comment->comment_content = request->comment_content;

        //bind comment with post id
        //$comment->post()->associate($post);

        //$comment->user()->associate($user);

        //Updating total comments
        $posts = DB::table('posts')
                 ->updateOrInsert(
                    ['total_comments' => '1']
                 );

        //persist comment object into database
        //$comment->save();


        //insert comment
        Comment::create($comment);


        //redirect back to the main page
        return back();
    }


    /*
    ------------------------------------------------------------
    MESSAGES
    ------------------------------------------------------------
    */

    /*
    ----------------------------------------------------
     * store a message
     * @param void
     * @return message object
     * @return project object
     * @return user object
     ---------------------------------------------------
     */
    //fetch all messages
    public function add_message(){
        $messages = Message::orderBy('id','desc')->get();
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();

        //pass data to view and load list view
        return view('health_safety_management.my_discussions', [
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
    ----------------------------------------------------------
    TASKS
    ----------------------------------------------------------
    */

    //fetch all messages
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
        return view('health_safety_management.my_tasks', [
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

        //insert post data
        Task::create($task);

        //redirect back to the main page
        return back();
    }


    /*
    -------------------------------------------------------------
    NOTES
    -------------------------------------------------------------
    */

    //fetch all messages
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
        return view('health_safety_management.notes', [
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

        /*
        return redirect()->route('health_safety_management.project', $project->id);
        */

    }

    public function delete_note($id){
        //update post data
        Note::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'Note deleted successfully!');

        return back();
    }

    /*
    ---------------------------------------------------------
    FOLDERS
    ---------------------------------------------------------
    */
    //Load form view
    public function folders(){
        $folders = DB::table('folders')
                    ->leftJoin('files', 'files.folder_id', '=', 'folders.id')
                    ->leftJoin('iso_management_systems', 'folders.iso_management_id', '=', 'iso_management_systems.id')
                    ->leftJoin('projects', 'folders.project_id', '=', 'projects.id')
                    ->select('folders.*', 'files.id', 'files.folder_id')
                    ->orderBy('folders.id', 'desc')->get();

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
        $projects = Project::orderBy('id','desc')->get();

        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $iso_management_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        //dd($users);
        //print_r("<pre>"); var_dump($users);
        //pass folder data to view and load list view

        return view('health_safety_management.folders', [
            'users' => $users,
            'folder' => $folder,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'projects' => $projects
        ]);
    }

    //Load form view
    public function create_folder(){

        $folders = Folder::orderBy('id', 'desc')->get();

        $isomanagements = IsoManagementSystem::orderBy('name')
                   ->get();

        return view('health_safety_management.create_folder', [
            'folders' => $folders,
            'isomanagements' => $isomanagements,
        ]);

    }

    /**
     * Store a newly created folder in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_folder(Request $request)
    {
        //validate data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'iso_management_id' => 'required'
        ]);

        //get project data
        //$folder = $request->all();
        //$folder['user_id'] = Auth::user()->id;

        //insert project data
        //Folder::create($folder);

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

    public function folder($id)
    {
        //fetch folder by ID
        $folder = Folder::find($id);

        //fetch file by ID
        $file = File::find($id);

        //$folders = Folder::orderBy('id', 'desc');

        //$project = Project::find($id);
        $users = User::orderBy('id','desc')->get();
        //$projects = Project::orderBy('id','desc')->get();

        //fetch user by ID
        $user = User::find($id);

        //Fetch all folders data
        $files = DB::table('files')
                    ->leftJoin('folders', 'folders.id', '=', 'files.folder_id')
                    ->select('files.*', 'folders.id')
                    ->where('files.folder_id', '=', $id)
                    ->get();

        //Fetch all folders data
        /*
        $folders = DB::table('folders')
                    ->leftJoin('files', 'folders.id', '=', 'files.folder_id')
                    ->select('files.*', 'folders.id', 'name')
                    ->where('files.folder_id', '=', $id)
                    ->get();
        */
        $folders = Folder::orderBy('id','desc')->get();

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

        //dd($folder->id);

        return view('health_safety_management.folder', [
            'folders' => $folders,
            'files' => $files,
            'posts' => $posts,
            'tasks' => $tasks,
            'folder'=> $folder,
        ]);
    }

    /*
    ---------------------------------------------------------------
    FILES
    ---------------------------------------------------------------
    */

    //Load form view
    public function files(){
        $files = File::orderBy('id', 'desc')->get();
        /*
        $files = DB::table('files')
                     ->leftJoin('users', 'files.user_id', '=', 'users.id')
                     ->leftJoin('folders', 'files.folder_id', '=', 'folders.id')
                     ->select('files.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'folders.name')
                     ->orderBy('files.id', 'desc')
                     ->get();
                     */
        //pass folder data to view and load list view
        return view('health_safety_management.files', [
            'files' => $files,
        ]);

    }

    //Load form view
    public function create_file() {
        $files = DB::table('files')
                    ->leftJoin('folders', 'files.folder_id', '=', 'folders.id')
                    ->leftJoin('iso_management_systems', 'files.iso_management_id', '=', 'iso_management_systems.id')
                    ->leftJoin('users', 'files.user_id', '=', 'users.id')
                    ->select('files.*', 'files.user_id', 'users.first_name', 'users.last_name', 'files.folder_id', 'folders.name',
                        'files.iso_management_id', 'iso_management_systems.name')
                    ->orderBy('files.id', 'desc')
                    ->get();

        $folders = Folder::orderBy('id','desc')->get();
        $users = User::orderBy('id','desc')->get();
        $projects = Project::orderBy('id','desc')->get();
        $iso_system = IsoManagementSystem::orderBy('id','desc')->get();

        //pass folder data to view and load list view
        return view('health_safety_management.create_file', [
            'users' => $users,
            'projects' => $projects,
            'folders' => $folders,
            'files' => $files,
            'iso_system' => $iso_system
        ]);
    }

    /**
     * Store a newly created folder in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insert_file(Request $request){
        $request->validate([
            'filename' => 'required',
            'description' => 'required',
            'url' => 'required',
            'resource_date' => 'required',
            'review_date' => 'required',
            //'image' => 'required|image|max:2048',
        ]);
        /*
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/images/'), $new_name);
        */

        $url = $request->file('url');
        $new_url = rand() . '.' . $url->getClientOriginalExtension();
        $url->move(public_path('/uploads/files/'), $new_url);

        $form_data = array(
            'filename'          =>   $request->filename,
            'description'       =>   $request->description,
            //'image'           =>   $new_name,
            //'type'            =>   $request->type,
            'url'               =>   $new_url,
            'resource_date'     =>   $request->resource_date,
            'review_date'       =>   $request->review_date,
            //'ownership_type'  =>   $request->ownership_type,
            'user_id'           =>   Auth::user()->id,
            'iso_management_id'        =>   $request->iso_management_id,
            'folder_id'         =>   $request->folder_id,
        );

        File::create($form_data);

        //store status message
        Session::flash('success_msg', 'File added successfully!');

        //redirect back to the main page
        return back();
    }

    public function file($id){

        //fetch project by ID
        $file = File::findOrFail($id)->get();
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

        //pass project to view and load list view
        return view('health_safety_management.project', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'file' => $file,
            'user' => $user,
        ]);

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
        $disclaimer->move(public_path('/uploads/files/'), $new_name);

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
            'user_id'         =>   Auth::user()->id,
        );

        DisclaimerSetting::create($form_data);

        //store status message
        Session::flash('success_msg', 'Disclaimer uploaded successfully!');

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
}
