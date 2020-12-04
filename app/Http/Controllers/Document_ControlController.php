<?php

namespace App\Http\Controllers;

use App\AwaitingRelease;
use App\ColorSchemeSetting as ColorSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\ColorSchemeSetting;
//use App\ColorSchemeSetting as ColorSettings;
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
use App\Training;
use App\DocumentControlReview;
use App\DocumentRecordArchive;
use App\DocumentLifeCyclePhase;
use App\InitialApproval;
use App\Review;
use App\FinalApproval;
use App\Release;

/*
-------------------------------------------------------------------------------
    DOCUMENT CONTROL CONTROLLER EXTENDING CONTROLLER
-------------------------------------------------------------------------------
*/

class Document_ControlController extends Controller
{
    /*
    ----------------------------------------------------
     * display folder resources
     * @param void
     * @param return array of user object
     * @param return array of post object
     * @param return array of folder object
     * @param return array of task object
     * @param return array of note object
     * @param return array of comment object
     * @param return array of color object
     * @param return array of file object
     ---------------------------------------------------
     */
    public function index(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        /*
        $files[] = DB::table('files')
                    ->select(DB::raw('count(*) as file_id, files.id'))
                    ->groupBy('files.id')
                    ->get();
        */

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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        //dd($users);
        //print_r("<pre>"); var_dump($users);

        //pass folder data to view and load list view
        return view('document_control.index', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'files' => $files
        ]);
    }

    public function document_life_cycle(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();


        //Fetch all files data
        $files = File::orderBy('id','desc')->get();


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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        $doc_assigned_by = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('files.category', 'files.department', 'document_control_reviews.assigned_to', 'document_control_reviews.due_date', 'document_life_cycle_phases.name')
            ->get();

        return view('document_control.document_life_cycle', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'files' => $files,
            'doc_assigned_by' => $doc_assigned_by
        ]);
    }

    public function document_by_department(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();


        $files[] = DB::table('files')
            ->select(DB::raw('count(*) as file_id, files.id'))
            ->groupBy('files.id')
            ->get();


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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        $doc_by_department = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('files.category', 'files.department', 'document_control_reviews.assigned_to', 'document_control_reviews.due_date', 'document_life_cycle_phases.name')
            ->get();

        return view('document_control.document_by_department', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_by_department' => $doc_by_department
        ]);
    }

    public function document_by_type(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();


        $files[] = DB::table('files')
            ->select(DB::raw('count(*) as file_id, files.id'))
            ->groupBy('files.id')
            ->get();


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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        $doc_by_type = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('files.category', 'files.department', 'document_control_reviews.assigned_to', 'document_control_reviews.due_date', 'document_life_cycle_phases.name')
            ->get();

        return view('document_control.document_by_type', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_by_type' => $doc_by_type
        ]);
    }

    public function document_phase(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();


        $files[] = DB::table('files')
            ->select(DB::raw('count(*) as file_id, files.id'))
            ->groupBy('files.id')
            ->get();


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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        $doc_by_phase = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('files.category', 'files.department', 'document_control_reviews.assigned_to', 'document_control_reviews.due_date', 'document_life_cycle_phases.name')
            ->get();

        return view('document_control.document_phase', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_by_phase' => $doc_by_phase
        ]);
    }

    public function document_duedate(){
        //fetch all posts data
        $folders = Folder::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();


        $files[] = DB::table('files')
            ->select(DB::raw('count(*) as file_id, files.id'))
            ->groupBy('files.id')
            ->get();


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

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');

        $doc_duedate = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('files.category', 'files.department', 'document_control_reviews.assigned_to', 'document_control_reviews.due_date', 'document_life_cycle_phases.name')
            ->orderBy('document_control_reviews.review_date', 'desc')
            ->get();

        return view('document_control.document_duedate', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_management_systems' => $iso_management_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_duedate' => $doc_duedate
        ]);
    }

    public function file($id){
        $file = DB::select("SELECT * FROM `files` where `id` = $id ");
        return view('document_control.file', [
            'file' => $file
        ]);
    }

    public function delete($id){
        //update post data
        File::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'File deleted successfully!');

        return back();
    }

    public function document_new_draft(){
        //fetch all folders
        $folders = Folder::orderBy('id', 'desc')->get();

        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        return view('document_control.document_new_draft', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files
        ]);
    }

    /**
     * Insert document.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
            $id = File::find(1);
            $number = $id;

            //assign and add the number with Doc ID
            $number += File::find(1);

            /*
            concatenate BRS-DFT- with the last inserted Doc ID
            that will end with 3 numbers.
            */

            return 'BRS-DFT-' . sprintf('%03d', intval($number) + 1);

        }else{
            /*
         The document exists then
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

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect back()
     */
    public function insert_document(Request $request){
        //validate data
        $this->validate($request, [
            'filename' => 'required',
            'revision' => 'required',
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
        $new_url = $url->getClientOriginalName();
        $url->move(public_path('/uploads/files/'), $new_url);

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

        //store status message
        Session::flash('success_msg', 'Draft added successfully!');

        //redirect back to the main page
        return redirect()->route('document_control.document_new_draft');
    }

    //create a function which takes the id of the first table as a parameter
    public function moveDocToArchives($id){
        $file = File::where('id', $id)->first(); //this will select the row with the given id
    }

    //create a function which takes the id of the first table as a parameter
    public function removeDocRecord($id){
        //get document by ID
        $file = File::find($id)->delete();

        //load form view or
        //redirect back to the main page
        return view('document_control.document_control_review', [
            'file' => $file
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect back()
     */
    public function add_training(Request $request){
        //validate data
        $this->validate($request, [
            'delay' => 'required',
            'delay_unit' => 'required',
        ]);

        $training_data = array(
            'delay' => $request->delay,
            'delay_unit' => $request->delay_unit,
            'has_training' => $request->has_training,
            'self_training' => $request->self_training,
            'started_at' => $request->started_at,
            'completed_at' => $request->completed_at,
            'user_id' =>  Auth::user()->id
        );

        Training::create($training_data);

        //store status message
        Session::flash('success_msg', 'Training successfully!');

        //redirect back to the main page
        return back();
    }

    public function document_control_review(){
        //fetch all posts data
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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        $doc_numbers = File::orderBy('id', 'desc')->get();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        //Fetch all control review docs
        $cont_rev_docs = DocumentControlReview::orderBy('id','desc')->get();

        $doc_reviews = DB::table('document_control_reviews')
            ->leftJoin('users', 'document_control_reviews.user_id', '=', 'users.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->leftJoin('document_life_cycle_phases', 'document_control_reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('document_control_reviews.*', 'users.*', 'files.*')
            ->get();

        $id = DocumentControlReview::orderBy('id')->get();

        $phases = DocumentLifeCyclePhase::orderBy('name', 'desc')->get();

        $controls = DocumentControlReview::orderBy('id', 'desc')->get();

        return view('document_control.document_control_review', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'doc_numbers' => $doc_numbers,
            'cont_rev_docs' => $cont_rev_docs,
            'files' => $files,
            'doc_reviews' => $doc_reviews,
            'controls' => $controls
        ]);
    }

    /**
     * Insert document.
     *
     * @param  void
     * @return document number
     */

    public function getNextDocRevNumber(){

        // Get the last created document
        $lastDoc = File::orderBy('id', 'desc')->first();

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
        return 'BRS-DCV-' . sprintf('%03d', intval($number) + 1);

    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_doc_control_review(Request $request){
        //validate data
        $this->validate($request, [
            'comment' => 'required',
            'assigned_to' => 'required',
            'file_id' => 'required',
            'attachment' => 'required',
            'review_date' => 'required',
            'due_date' => 'required',
            'completed_date' => 'required'
        ]);

        //$file = DB::table('files')->where('file_id',$id)->first();

        $form_data = array(
            'comment' => $request->comment,
            'assigned_to' => $request->assigned_to,
            'file_id' => $request->file_id,
            'attachment' => $request->attachment,
            'review_date' => $request->review_date,
            'due_date' => $request->due_date,
            'completed_date' => $request->completed_date,
            'user_id'  =>  Auth::user()->id
        );

        //Store data in document_control_reviews
        $lastId = DocumentControlReview::create($form_data);

        $archive_data = array(
            'user_id'  =>  Auth::user()->id,
            'iso_management_id' => $request->iso_management_id,
            'document_control_review_id' => $lastId->id,
            'initial_approval_id' => $request->initial_approval_id,
            'review_id' => $request->review_id,
            'final_approval_id' => $request->final_approval_id,
            'awaiting_release_id'  => $request->awaiting_release_id,
            'release_id'  => $request->release_id,
            'project_id' => $request->project_id,
            'folder_id' => $request->folder_id,
            'file_id' => $request->file_id
        );

        DocumentRecordArchive::create($archive_data);

        //Select all date from files and store them in document_control_reviews
        //DB::statement('INSERT document_record_archives SELECT * FROM files');



        //Truncate files
        //DBDocumentRecordArchive::table('files')->truncate();

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return redirect()->route('document_control.document_control_review');
    }

    /*
    ------------------------------------------------------------------------
        INITIAL APPROVAL
    ------------------------------------------------------------------------
    */
    public function initial_approval(){

        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        $id = DB::table('document_control_reviews')->select('id')->get();
        $approval_files = DB::table('document_control_reviews')
            ->leftJoin('initial_approvals', 'initial_approvals.document_control_review_id', '=', 'document_control_reviews.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'initial_approvals.*', 'files.*')
            ->where('initial_approvals.document_control_review_id', '=', $id)
            ->get();

        $approved_docs = DB::table('initial_approvals')
            ->leftJoin('users', 'initial_approvals.user_id', '=', 'users.id')
            ->leftJoin('document_life_cycle_phases', 'initial_approvals.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('initial_approvals.*', 'users.first_name', 'users.last_name')
            ->get();

        $i_approval = InitialApproval::orderBy('id', 'desc')->get();
        $doc_reviews = DocumentControlReview::orderBy('id', 'desc')->get();

        return view('document_control.initial_approval', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'approval_files' => $approval_files,
            'approved_docs' => $approved_docs,
            'doc_reviews' => $doc_reviews,
            'i_approval' => $i_approval
        ]);
    }

    public function getNextInitAppDocNumber(){
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
            $id = File::find(1);
            $number = $id;

            //assign and add the number with Doc ID
            $number += File::find(1);

            /*
            concatenate BRS-DFT- with the last inserted Doc ID
            that will end with 3 numbers.
            */

            return 'BRS-DFT-' . sprintf('%03d', intval($number) + 1);

        }else{
            /*
         The document exists then
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

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_initial_approval(Request $request){
        //validate data
        $this->validate($request, [
            'approval_date' => 'required',
            'approved_by' => 'required',
            'comment' => 'required'
        ]);

        $form_data = array(
            'document_control_review_id' => $request->document_control_review_id,
            'comment' => $request->comment,
            'approved_by' => $request->approved_by,
            'approval_date' => $request->approval_date,
            'user_id'  =>  Auth::user()->id
        );

        $lastId = InitialApproval::create($form_data);

        $archive_data = array(
            'user_id'  =>  Auth::user()->id,
            'initial_approval_id' => $lastId->id
        );

        DocumentRecordArchive::create($archive_data);


        //Truncate files
        //DB::table('files')->truncate();

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return back();
    }

    /*
    ------------------------------------------------------------------------
        REVIEW
    ------------------------------------------------------------------------
    */
    public function review(){

        $id = 10;
        $file = File::find($id);
        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

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
        $review = Review::find($id);

        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        $review_files = DB::table('initial_approvals')
            ->leftJoin('files', 'initial_approvals.file_id', '=', 'files.id')
            ->select('initial_approvals.id AS initial_approval_id', 'initial_approvals.revision',
                'initial_approvals.approved_by', 'initial_approvals.file_id',
                'initial_approvals.phase_id', 'files.id', 'files.url')
            ->orderBy('initial_approvals.id', 'desc')
            ->get();

        $review_docs = DB::table('reviews')
            ->leftJoin('files', 'reviews.file_id', '=', 'files.id')
            ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
            ->leftJoin('document_life_cycle_phases', 'reviews.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('reviews.*', 'files.*')
            ->get();


        $approved_docs = DB::table('initial_approvals')
            ->leftJoin('files', 'initial_approvals.file_id', '=', 'files.id')
            ->select('initial_approvals.approval_date', 'initial_approvals.id', 'files.filename')
            ->get();

        //$approvals = InitialApproval::with('reviews', 'user')->orderBy('id', 'desc')->limit(20)->get();

        $doc_reviews = DB::table('document_control_reviews')
            ->leftJoin('users', 'document_control_reviews.user_id', '=', 'users.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'users.*', 'files.filename')->get();

        $reviews = Review::orderBy('id', 'desc')->get();
        $approvals = InitialApproval::orderBy('id', 'desc')->get();

        return view('document_control.review', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'review_files' => $review_files,
            'file' => $file,
            'approved_docs' => $approved_docs,
            'approvals' => $approvals,
            'doc_reviews' => $doc_reviews,
            'reviews' => $reviews,
            'review_docs' => $review_docs
        ]);
    }

    public function revision($id){

        //fetch project by ID
        $users = User::orderBy('id','desc')->get();

        $posts = Post::with('comments', 'user', 'project')->orderBy('id', 'desc')->limit(20)->get();

        $tasks = DB::table('tasks')
            ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
            ->leftJoin('projects', 'tasks.project_id', '=', 'projects.id')
            ->select('tasks.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'projects.project_name')
            ->orderBy('id', 'desc')
            ->get();

        $user = User::find($id);
        //fetch folder by ID
        $revision = Review::find($id);
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

        return view('document_control.revision', [
            'posts' => $posts,
            'tasks' => $tasks,
            'revision'=> $revision,
            'folders'=> $folders,
            'notes' => $notes,
            'colors' => $colors,
            'logos' => $logos,
            'users' => $users,
            'user' => $user,
        ]);

    }

    public function getNextRevDocNumber(){
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
            $id = File::find(1);
            $number = $id;

            //assign and add the number with Doc ID
            $number += File::find(1);

            /*
            concatenate BRS-DFT- with the last inserted Doc ID
            that will end with 3 numbers.
            */

            return 'BRS-DFT-' . sprintf('%03d', intval($number) + 1);

        }else{
            /*
         The document exists then
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

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_review(Request $request){
        //validate data
        $this->validate($request, [
            'review_date' => 'required',
            'reviewed_by' => 'required',
            'attachment' => 'required'
        ]);

        $form_data = array(
            'comment' => $request->comment,
            'reviewed_by' => $request->reviewed_by,
            'revision' => $request->revision,
            'file_id' => $request->file_id,
            'initial_approval_id' => $request->initial_approval_id,
            'phase_id' => $request->phase_id,
            'review_date' => $request->review_date,
            'attachment' => $request->attachment,
            'user_id'  =>  Auth::user()->id
            //'doc_number' => $this->getNextDocRevNumber()
        );

        //Store data in document_control_reviews
        Review::create($form_data);

        //Select all date from files and store them in document_control_reviews
        //DB::statement('INSERT document_record_archives SELECT * FROM files');



        //Truncate files
        //DB::table('files')->truncate();

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return back();
    }

    /*
   ------------------------------------------------------------------------
       FINAL APPROVAL
   ------------------------------------------------------------------------
   */
    public function final_approval()
    {

        $id = 10;
        $file = File::find($id);
        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

        $users = User::orderBy('id', 'desc')->get();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id', 'desc')->get();

        $final_approved_files = DB::table('reviews')
            ->leftJoin('files', 'reviews.file_id', '=', 'files.id')
            ->select('reviews.id AS review_id', 'reviews.revision',
                'reviews.reviewed_by', 'reviews.file_id', 'reviews.phase_id', 'files.id', 'files.url')
            ->orderBy('reviews.id', 'desc')
            ->get();

        $final_approvals = DB::table('final_approvals')
            ->leftJoin('files', 'final_approvals.file_id', '=', 'files.id')
            ->leftJoin('users', 'final_approvals.user_id', '=', 'users.id')
            ->leftJoin('document_life_cycle_phases', 'final_approvals.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('final_approvals.*', 'files.*')
            ->get();

        $approved_docs = DB::table('reviews')
            ->leftJoin('files', 'reviews.file_id', '=', 'files.id')
            ->select('reviews.review_date', 'reviews.id', 'files.filename')
            ->get();

        $doc_reviews = DB::table('document_control_reviews')
            ->leftJoin('users', 'document_control_reviews.user_id', '=', 'users.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'users.*', 'files.filename')->get();

        $reviews = Review::orderBy('id', 'desc')->get();

        $f_approval = FinalApproval::orderBy('id', 'desc')->get();

        return view('document_control.final_approval', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'final_approved_files' => $final_approved_files,
            'file' => $file,
            'approved_docs' => $approved_docs,
            'reviews' => $reviews,
            'f_approval' =>$f_approval,
            'final_approvals' => $final_approvals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_final_approval(Request $request){
        //validate data
        $this->validate($request, [
            'approval_date' => 'required',
            'approved_by' => 'required'
        ]);

        $form_data = array(
            'comment' => $request->comment,
            'approved_by' => $request->approved_by,
            'revision' => $request->revision,
            'file_id' => $request->file_id,
            'review_id' => $request->review_id,
            'phase_id' => $request->phase_id,
            'approval_date' => $request->approval_date,
            'attachment' => $request->attachment,
            'user_id'  =>  Auth::user()->id
            //'doc_number' => $this->getNextDocRevNumber()
        );

        //Store data in document_control_reviews
        FinalApproval::create($form_data);

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return back();
    }

    /*
   ------------------------------------------------------------------------
       AWAITNG RELEASE
   ------------------------------------------------------------------------
   */
    public function awaiting_release()
    {

        $id = 10;
        $file = File::find($id);
        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

        $users = User::orderBy('id', 'desc')->get();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id', 'desc')->get();

        $awaiting_release_files = DB::table('final_approvals')
            ->leftJoin('files', 'final_approvals.file_id', '=', 'files.id')
            ->select('final_approvals.id AS final_approval_id', 'final_approvals.revision',
                'final_approvals.approved_by', 'final_approvals.file_id', 'final_approvals.phase_id', 'files.id', 'files.url')
            ->orderBy('final_approvals.id', 'desc')
            ->get();

        $awaiting_releases = DB::table('awaiting_releases')
            ->leftJoin('files', 'awaiting_releases.file_id', '=', 'files.id')
            ->leftJoin('users', 'awaiting_releases.user_id', '=', 'users.id')
            ->leftJoin('document_life_cycle_phases', 'awaiting_releases.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('awaiting_releases.*', 'files.*')
            ->get();

        $approved_docs = DB::table('final_approvals')
            ->leftJoin('files', 'final_approvals.file_id', '=', 'files.id')
            ->select('final_approvals.approval_date', 'final_approvals.id', 'files.filename')
            ->get();

        $doc_reviews = DB::table('document_control_reviews')
            ->leftJoin('users', 'document_control_reviews.user_id', '=', 'users.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'users.*', 'files.filename')->get();

        $f_approval = FinalApproval::orderBy('id', 'desc')->get();

        $awaiting_release = AwaitingRelease::orderBy('id', 'desc')->get();

        return view('document_control.awaiting_release', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'awaiting_release_files' => $awaiting_release_files,
            'file' => $file,
            'approved_docs' => $approved_docs,
            'doc_reviews' => $doc_reviews,
            'f_approval' => $f_approval,
            'awaiting_release' =>$awaiting_release,
            'awaiting_releases' => $awaiting_releases
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_awaiting_release(Request $request){
        //validate data
        $this->validate($request, [
            'attachment' => 'required'
        ]);

        $form_data = array(
            'file_id' => $request->file_id,
            'final_approval_id' => $request->final_approval_id,
            'awaiting_release_id' => $request->awaiting_release_id,
            'phase_id' => $request->phase_id,
            'attachment' => $request->attachment,
            'approved_by' => $request->approved_by,
            'user_id'  =>  Auth::user()->id
        );

        //Store data in document_control_reviews
        AwaitingRelease::create($form_data);
        // Release::create($form_data);

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return back();
    }

    /*
   ------------------------------------------------------------------------
       RELEASE
   ------------------------------------------------------------------------
   */
    public function release()
    {

        $id = 10;
        $file = File::find($id);
        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

        $users = User::orderBy('id', 'desc')->get();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id', 'desc')->get();

        $release_files = DB::table('awaiting_releases')
            ->leftJoin('files', 'awaiting_releases.file_id', '=', 'files.id')
            ->select('awaiting_releases.id AS awaiting_release_id', 'awaiting_releases.file_id',
                'awaiting_releases.phase_id', 'files.id', 'files.url')
            ->orderBy('awaiting_releases.id', 'desc')
            ->get();

        $release_docs = DB::table('releases')
            ->leftJoin('files', 'releases.file_id', '=', 'files.id')
            ->leftJoin('users', 'releases.user_id', '=', 'users.id')
            ->leftJoin('document_life_cycle_phases', 'releases.phase_id', '=', 'document_life_cycle_phases.id')
            ->select('releases.*', 'files.*', 'users.*')
            ->get();

        $approved_docs = DB::table('awaiting_releases')
            ->leftJoin('files', 'awaiting_releases.file_id', '=', 'files.id')
            ->select('awaiting_releases.id', 'files.filename')
            ->get();

        $doc_reviews = DB::table('document_control_reviews')
            ->leftJoin('users', 'document_control_reviews.user_id', '=', 'users.id')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'users.*', 'files.filename')->get();

        $releases = Release::orderBy('id', 'desc')->get();

        return view('document_control.release', [
            'users' => $users,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'release_files' => $release_files,
            'file' => $file,
            'approved_docs' => $approved_docs,
            'doc_reviews' => $doc_reviews,
            'releases' => $releases,
            'release_docs' => $release_docs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     * @return redirect()
     */
    public function insert_release(Request $request){
        //validate data
        $this->validate($request, [
            'attachment' => 'required'
        ]);

        $form_data = array(
            'file_id' => $request->file_id,
            'awaiting_release_id' => $request->awaiting_release_id,
            'phase_id' => $request->phase_id,
            'attachment' => $request->attachment,
            'user_id'  =>  Auth::user()->id
        );

        //Store data in document_control_reviews
        Release::create($form_data);

        //store status message
        Session::flash('success_msg', 'Revision is successfully done!');

        //redirect back to the main page
        return back();
    }

    /**
     * Store a newly created resource in storage.
     * @param  $id
     */
    public function get_file_to_approve($id){

        //fetch file by ID
        $file = File::find($id);

        //fetch all folders
        $folders = Folder::orderBy('id', 'desc')->get();

        //fetch all projects
        $projects = Project::orderBy('id', 'desc')->get();

        //print_r("<pre>");var_dump($folders); die();

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

        $iso_systems = IsoManagementSystem::orderBy('id', 'desc')->get();

        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();

        $comments = DB::table('comments')
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->leftJoin('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*', 'users.first_name', 'users.last_name', 'users.profile_image', 'posts.id')
            ->orderBy('comments.id', 'desc')
            ->get();
        $comment = Comment::find('id');
        $doc_number = File::orderBy('id', 'desc')->limit('1')->get();

        //Fetch all files data
        $files = File::orderBy('id','desc')->get();

        $approval_files = DB::table('document_control_reviews')
            ->leftJoin('files', 'document_control_reviews.file_id', '=', 'files.id')
            ->select('document_control_reviews.*', 'files.*')
            ->orderBy('document_control_reviews.id', 'desc')
            ->limit('1')
            ->get();

        return view('document_control.get_file_to_approve', [
            'users' => $users,
            'folders' => $folders,
            'posts' => $posts,
            'tasks' => $tasks,
            'notes' => $notes,
            'colors' => $colors,
            'iso_systems' => $iso_systems,
            'logos' => $logos,
            'comments' => $comments,
            'doc_number' => $doc_number,
            'projects' => $projects,
            'files' => $files,
            'approval_files' => $approval_files,
            'file' => $file
        ]);
    }


}
