<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\AreaQualityRepresentative;
use App\FailureMode;
use App\CorrectiveAction;
use App\HierarchyOfControl;
use App\NonConformanceDetail;
use App\NonConformanceDescription;
use App\WorkspaceLogoSetting;
use App\ColorSchemeSetting as ColorSettings;
use App\File;
use App\User;

class ChangeControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();
        $non_conformance_details = DB::table('non_conformance_details')
            ->leftJoin('users', 'non_conformance_details.reporting_person', '=', 'users.id')
            ->select('non_conformance_details.*', 'users.*')
            ->get();
        $non_conformance_detail = NonConformanceDetail::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.index', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'non_conformance_details'  => $non_conformance_details,
            'hierarchies' => $hierarchies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_hierarchy_control(Request $request)
    {
        //validate data
        $this->validate($request, [
            'division' => 'required',
            'site' => 'required',
            'department' => 'required'
        ]);

        $form_data = array(
            'division' => $request->division,
            'department' => $request->department,
            'site' => $request->site,
            'user_id'  =>  Auth::user()->id
        );

        //Store data in hierarchy_control
        HierarchyOfControl::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hierarchy_control()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        //$hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();
        $hierarchies = DB::table('hierarchy_of_controls')
            ->leftJoin('non_conformance_details', 'non_conformance_details.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->leftJoin('non_conformance_descriptions', 'non_conformance_descriptions.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->select('non_conformance_descriptions.*', 'non_conformance_details.*', 'hierarchy_of_controls.*')
            ->get();
        $non_conformance_detail = NonConformanceDetail::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.hierarchy_control', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'hierarchies' => $hierarchies
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function non_conformance_descriptions()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();
        $non_conformance_descs = DB::table('non_conformance_descriptions')
            ->leftJoin('users', 'non_conformance_descriptions.user_id', '=', 'users.id')
            ->leftJoin('hierarchy_of_controls', 'non_conformance_descriptions.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->leftJoin('files', 'non_conformance_descriptions.specification_document', '=', 'files.id')
            ->select('non_conformance_descriptions.*', 'users.*', 'hierarchy_of_controls.*', 'files.*')
            ->get();
        $descriptions = NonConformanceDescription::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.non_conformance_descriptions', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'non_conformance_descs' => $non_conformance_descs,
            'descriptions' => $descriptions,
            'hierarchies' => $hierarchies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_non_conformance_description(Request $request)
    {
        //validate data
        $this->validate($request, [
            'detection_method' => 'required',
            'describe_non_performance'  => 'required',
            'document'                  => 'required',
            'specification_document'    => 'required',
            'reference'                 => 'required',
            'specification_owner'       => 'required',
            'report_type'               => 'required'
        ]);

        $form_data = array(
            'user_id'                   =>  Auth::user()->id,
            'hierarchy_id'              => $request->hierarchy_id,
            'detection_method'          => $request->detection_method,
            'describe_non_performance'  => $request->describe_non_performance,
            'document'                  => $request->document,
            'specification_document'    => $request->specification_document,
            'reference'                 => $request->reference,
            'specification_owner'       => $request->specification_owner,
            'report_type'               => $request->report_type,
        );
        //dd($form_data);
        //Store data in non_conformance_description
        NonConformanceDescription::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_area_quality_representative(Request $request)
    {
        //validate data
        $this->validate($request, [
            'area_representative' => 'required'
        ]);

        $form_data = array(
            'area_representative' => $request->area_representative,
            'hierarchy_id' => $request->hierarchy_id,
            'user_id'  =>  Auth::user()->id
        );

        //Store data in area_quality_representatives
        AreaQualityRepresentative::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quality_representative()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();

        $representatives = DB::table('area_quality_representatives')
            ->leftJoin('hierarchy_of_controls', 'area_quality_representatives.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->leftJoin('users', 'area_quality_representatives.area_representative', '=', 'users.id')
            ->select('area_quality_representatives.*', 'hierarchy_of_controls.*', 'users.*')
            ->get();

        $descriptions = NonConformanceDescription::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.quality_representative', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'representatives' => $representatives,
            'descriptions' => $descriptions,
            'hierarchies' => $hierarchies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_non_conformance_details(Request $request)
    {
        //validate data
        $this->validate($request, [
            'reporting_person'          => 'required',
            'process'                   => 'required',
            'occurred_time_hour'        => 'required',
            'occurred_time_minute'      => 'required',
            'affiliation'               => 'required'
        ]);

        $form_data = array(
            'reporting_person'          => $request->reporting_person,
            'process'                   => $request->process,
            'occurred_time_hour'        => $request->occurred_time_hour,
            'occurred_time_minute'      => $request->occurred_time_minute,
            'affiliation'               => $request->affiliation,
            'hierarchy_id'              => $request->hierarchy_id,
            'user_id'                   =>  Auth::user()->id
        );

        //Store data in non_conformance_details
        NonConformanceDetail::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function non_conformance_details()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();

        $details = DB::table('non_conformance_details')
            ->leftJoin('hierarchy_of_controls', 'non_conformance_details.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->leftJoin('users', 'non_conformance_details.reporting_person', '=', 'users.id')
            ->select('non_conformance_details.*', 'hierarchy_of_controls.*', 'users.*')
            ->get();

        $descriptions = NonConformanceDescription::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.non_conformance_details', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'details' => $details,
            'descriptions' => $descriptions,
            'hierarchies' => $hierarchies
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_corrective_action(Request $request)
    {
        //validate data
        $this->validate($request, [
            'immediate_corrective_action'   => 'required',
            'action_taken_by'               => 'required',
            'corrective_action'             => 'required'
        ]);

        $form_data = array(
            'immediate_corrective_action'   => $request->immediate_corrective_action,
            'action_taken_by'               => $request->action_taken_by,
            'corrective_action'             => $request->corrective_action,
            'hierarchy_id'                  => $request->hierarchy_id,
            'hierarchy_id'                  => $request->hierarchy_id,
            'user_id'                       =>  Auth::user()->id
        );

        //Store data in corrective_action
        CorrectiveAction::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corrective_action()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();

        $actions = DB::table('corrective_actions')
            ->leftJoin('hierarchy_of_controls', 'corrective_actions.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->leftJoin('users', 'corrective_actions.action_taken_by', '=', 'users.id')
            ->select('corrective_actions.*', 'hierarchy_of_controls.*', 'users.*')
            ->get();

        $descriptions = NonConformanceDescription::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.corrective_action', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'actions' => $actions,
            'descriptions' => $descriptions,
            'hierarchies' => $hierarchies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_failure_mode(Request $request)
    {
        //validate data
        $this->validate($request, [
            'product_problem_code'   => 'required'
        ]);

        $form_data = array(
            'product_problem_code'   => $request->product_problem_code,
            'hierarchy_id'           => $request->hierarchy_id,
            'hierarchy_id'           => $request->hierarchy_id,
            'user_id'                =>  Auth::user()->id
        );

        //Store data in failure_mode
        FailureMode::create($form_data);

        //store status message
        Session::flash('success_msg', 'Hierarchy is successfully create!');

        //redirect back to the main page
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function failure_mode()
    {
        $logos = WorkspaceLogoSetting::orderBy('id', 'desc')->limit('1')->get();
        $colors = ColorSettings::orderBy('id', 'desc')->limit('1')->get();
        $files = File::orderBy('id','desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        $hierarchies = HierarchyOfControl::orderBy('id', 'desc')->get();

        $modes = DB::table('failure_modes')
            ->leftJoin('hierarchy_of_controls', 'failure_modes.hierarchy_id', '=', 'hierarchy_of_controls.id')
            ->select('failure_modes.*', 'hierarchy_of_controls.*')
            ->get();

        $descriptions = NonConformanceDescription::orderBy('id', 'desc')->get();
        //pass folder data to view and load list view
        return view('changecontrol.failure_mode', [
            'logos'             => $logos,
            'colors'            => $colors,
            'files'             => $files,
            'users'             => $users,
            'modes' => $modes,
            'descriptions' => $descriptions,
            'hierarchies' => $hierarchies
        ]);
    }


    public function file($id){
        $file = DB::select("SELECT * FROM `files` where `id` = $id ");
        return view('changecontrol.file', [
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
}
