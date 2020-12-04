<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('/home');
});

//ROUTING
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PROFILE
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

//ISO MODULES
Route::get('/modules', 'ModulesController@index')->name('modules');

//EVENTS CALENDAR
Route::get('/event', 'EventController@index')->name('event');

//DOCUMENT MANAGEMENT
Route::get('/document_management', 'Document_ManagementController@index')->name('document_management');

Route::get('/document_management/post/{id}', 'Document_ManagementController@post')->name('document_management.post');

Route::get('/document_management/delete_logo/{id}', 'Document_ManagementController@delete_logo')->name('document_management.delete_logo');

//ISO MANAGEMENT MODULES
Route::get('/iso_management_modules', 'Iso_Management_ModulesController@index')->name('iso_management_modules');

//HEALTH SYSTEM MANAGEMENT
Route::get('/health_safety_management/', 'Health_Safety_ManagementController@index')->name('health_safety_management');

//HEALTH SYSTEM MANAGEMENT - DISCUSSIONS
Route::get('/health_safety_management/my_tasks', 'Health_Safety_ManagementController@my_tasks')->name('health_safety_management.my_tasks');


//HEALTH SYSTEM MANAGEMENT - DISCUSSIONS
Route::get('/health_safety_management/my_discussions', 'Health_Safety_ManagementController@my_discussions')->name('health_safety_management.my_discussions');

//HEALTH SYSTEM MANAGEMENT - ADD PROJECT
Route::get('/health_safety_management/add_project', 'Health_Safety_ManagementController@add_project')->name('health_safety_management.add_project');

//HEALTH SYSTEM MANAGEMENT - ADD PROJECT
Route::get('/health_safety_management/project', 'Health_Safety_ManagementController@project')->name('health_safety_management.project');

//HEALTH SYSTEM MANAGEMENT - CREATE FOLDER
Route::get('/health_safety_management/create_folder', 'Health_Safety_ManagementController@create_folder')->name('health_safety_management.create_folder');

//HEALTH SYSTEM MANAGEMENT - CREATE FILE
Route::get('/health_safety_management/create_file', 'Health_Safety_ManagementController@create_file')->name('health_safety_management.create_file');

//HEALTH SYSTEM MANAGEMENT - INSERT NOTE
Route::get('/health_safety_management/insert_note', 'Health_Safety_ManagementController@insert_note')->name('health_safety_management.insert_note');

//HEALTH SAFETY MANAGEMENT - COMMENT
Route::post('/health_safety_management/insert_comment/{post_id}', 'Health_Safety_ManagementController@insert_comment')->name('health_safety_management.insert_comment');

//FOLDERS
Route::get('/folders', 'FoldersController@index')->name('folders.index');
Route::get('/folders/file/{id}', 'FoldersController@index')->name('folders.index');

Route::get('/folders/create_folder', 'FoldersController@create_folder')->name('folders.create_folder');

Route::post('/folders/store_folder', 'FoldersController@store_folder')->name('folders.store_folder');

Route::get('/folders/folder/{id}', 'FoldersController@folder')->name('folders.folder');
Route::get('/folders/folder_details/{id}', 'FoldersController@folder_details')->name('folders.folder_details');

Route::get('/folders/file/{id}', 'FoldersController@file')->name('folders.file');
//Route::get('/folders/fileDetails/{id}', 'FoldersController@fileDetails')->name('folders.file');

//PROJECTS
Route::get('folders/projects', 'FoldersController@projects')->name('folders.projects');

Route::get('/folders/add_project', 'FoldersController@add_project')->name('folders.add_project');

Route::post('/folders/insert_project', 'FoldersController@insert_project')->name('folders.insert_project');

Route::get('/folders/project/{id}', 'FoldersController@project')->name('folders.project');

//FILES
Route::get('/folders/files', 'FoldersController@files')->name('folders.files');

Route::get('/folders/create_file', 'FoldersController@create_file')->name('folders.create_file');

Route::post('/folders/insert_file', 'FoldersController@insert_file')->name('folders.insert_file');

Route::get('/folders/file/{id}', 'FoldersController@file')->name('folders.file');

Route::get('/file/{id}', 'FileController@file')->name('file.index');
Route::get('/folders/delete_file/{id}', 'FoldersController@delete_file')->name('folders.delete_file');


//NOTES
Route::post('/folders/insert_note', 'FoldersController@insert_note')->name('folders.insert_note');

Route::get('/folders/delete_note/{id}', 'FoldersController@delete_note')->name('folders.delete_note');

//POSTS - DISCUSSIONS
Route::get('/folders/my_discussions', 'FoldersController@my_discussions')->name('folders.my_discussions');

Route::post('/folders/insert_discussion', 'FoldersController@insert_discussion')->name('folders.insert_discussion');

//POST ID
Route::get('/folders/post/{id}', 'FoldersController@post')->name('folders.post');

//COMMENTS
Route::post('/folders/comments', 'FoldersController@comments')->name('folders.comments');

Route::post('/folders/insert_comment', 'FoldersController@insert_comment')->name('folders.insert_comment');

Route::post('/folders/add_comment', 'FoldersController@add_comment')->name('folders.add_comment');

//LIKES DISLIKES

//MESSAGES
Route::get('/folders/add_message', 'FoldersController@add_message')->name('folders.add_message');

Route::post('/folders/send_message', 'FoldersController@send_message')->name('folders.send_message');

//TASKS
Route::get('/folders/my_tasks', 'FoldersController@my_tasks')->name('folders.my_tasks');

Route::post('/folders/insert_task', 'FoldersController@insert_task')->name('folders.insert_task');
Route::post('/folders/add_task', 'FoldersController@add_task')->name('folders.add_task');

Route::get('/folders/add_insert', 'FoldersController@add_insert')->name('folders.add_insert');

Route::post('/folders/insert_note/{id}', 'FoldersController@insert_note')->name('folders.insert_note');

Route::get('/folders/delete_note/{id}', 'FoldersController@delete_note')->name('folders.delete_note');

//SETTINGS
Route::get('/folders/settings', 'FoldersController@settings')->name('folders.settings');

//TERMS & CONDITIONS
Route::post('/folders/upload_terms', 'FoldersController@upload_terms')->name('folders.upload_terms');

//DISCLAIMER
Route::post('/folders/upload_disclaimer', 'FoldersController@upload_disclaimer')->name('folders.upload_disclaimer');

Route::post('/folders/upload_video', 'FoldersController@upload_video')->name('folders.upload_video');

//PREFERENCE
Route::post('/folders/uploadvideosettings', 'FoldersController@uploadvideosettings')->name('folders.uploadvideosettings');

//VIDEO SETTINGS
Route::post('/folders/add_preference', 'FoldersController@add_preference')->name('folders.add_preference');

//LOGO
Route::post('/folders/uploadlogo', 'FoldersController@uploadlogo')->name('folders.uploadlogo');

Route::post('/folders/uploadlogos', 'FoldersController@uploadlogos')->name('folders.uploadlogos');

//COLOR SCHEMES
Route::post('/folders/setColors', 'FoldersController@setColors')->name('folders.setColors');

//STATISTICS
Route::get('/incidentstats', 'IncidentStatsController@index')->name('incidentstats.index');

//NOTIFICATIONS
Route::get('/usernotification', 'UserNotificationController@index')->name('usernotification.index');

/*
----------------------------------------------
DOCUMENT LIFE CYCLE
----------------------------------------------
*/

/*
DOCUMENT CONTROL
-----------------
*/
//HOME
Route::get('/document_control', 'Document_ControlController@index')->name('document_control.index');

//LIFE CYCLE
Route::get('/document_control/document_life_cycle', 'Document_ControlController@document_life_cycle')->name('document_control.document_life_cycle');

//BY DEPARTMENT
Route::get('/document_control/document_by_department', 'Document_ControlController@document_by_department')->name('document_control.document_by_department');

//BY TYPE
Route::get('/document_control/document_by_type', 'Document_ControlController@document_by_type')->name('document_control.document_by_type');

//BY PHASE
Route::get('/document_control/document_phase', 'Document_ControlController@document_phase')->name('document_control.document_phase');

//BY DUE DATE
Route::get('/document_control/document_duedate', 'Document_ControlController@document_duedate')->name('document_control.document_duedate');

/*
DRAFT - CYCLE ONE
-----------------------
*/
Route::get('/document_control/document_new_draft', 'Document_ControlController@document_new_draft')->name('document_control.document_new_draft');

//INSERT DOCUMENT
Route::post('/document_control/insert_document', 'Document_ControlController@insert_document')->name('document_control.insert_document');

//INSERT TRAINING
Route::post('/document_control/add_training', 'Document_ControlController@add_training')->name('document_control.add_training');

/*
DOCUMENT CONTROL REVIEWS - CYCLE TWO
------------------------------------
*/

//HOME
Route::get('/document_control/document_control_review', 'Document_ControlController@document_control_review')->name('document_control.document_control_review');

Route::post('/document_control/insert_doc_control_review', 'Document_ControlController@insert_doc_control_review')->name('document_control.insert_doc_control_review');

Route::post('/document_control/removeDocRecord/{id}', 'Document_ControlController@removeDocRecord')->name('document_control.removeDocRecord');

Route::get('/document_control/moveDocToArchives/{id}', 'Document_ControlController@moveDocToArchives')->name('document_control.moveDocToArchives');

Route::get('/document_control/file/{id}', 'document_controlController@file')->name('document_control.file');

/*
INITIAL APPROVAL - CYCLE THREE
------------------------------
*/
Route::get('/document_control/initial_approval', 'Document_ControlController@initial_approval')->name('document_control.initial_approval');

Route::post('/document_control/insert_initial_approval', 'Document_ControlController@insert_initial_approval')->name('document_control.insert_initial_approval');

/*
REVIEW - CYCLE FOUR
------------------------------
*/
Route::get('/document_control/review', 'Document_ControlController@review')->name('document_control.review');

Route::post('/document_control/insert_review', 'Document_ControlController@insert_review')->name('document_control.insert_review');

/*
FINAL APPROVAL - CYCLE FIVE
------------------------------
*/
Route::get('/document_control/final_approval', 'Document_ControlController@final_approval')->name('document_control.final_approval');

Route::post('/document_control/insert_final_approval', 'Document_ControlController@insert_final_approval')->name('document_control.insert_final_approval');

/*
AWAITING RELEASE - CYCLE SIX
------------------------------
*/
Route::get('/document_control/awaiting_release', 'Document_ControlController@awaiting_release')->name('document_control.awaiting_release');

Route::post('/document_control/insert_awaiting_release', 'Document_ControlController@insert_awaiting_release')->name('document_control.insert_awaiting_release');

/*
AWAITING RELEASE - CYCLE SEVEN
------------------------------
*/
Route::get('/document_control/release', 'Document_ControlController@release')->name('document_control.release');

Route::post('/document_control/insert_release', 'Document_ControlController@insert_release')->name('document_control.insert_release');

/*
RELEASE - CYCLE SEVEN
------------------------------
*/
Route::get('/document_control/release', 'Document_ControlController@release')->name('document_control.release');

Route::post('/document_control/insert_release', 'Document_ControlController@insert_release')->name('document_control.insert_release');

/*
----------------------------------------------
CHANGE CONTROL
----------------------------------------------
*/

//HOME
Route::get('/changecontrol', 'ChangeControlController@index')->name('changecontrol.index');

//HIERARCHY OF CONTROL
Route::post('/changecontrol/store_hierarchy_control', 'ChangeControlController@store_hierarchy_control')
    ->name('changecontrol.store_hierarchy_control');

Route::get('/changecontrol/hierarchy_control', 'ChangeControlController@hierarchy_control')
    ->name('changecontrol.hierarchy_control');

//AREA QUALITY REPRESENTATIVE
Route::post('/changecontrol/store_area_quality_representative', 'ChangeControlController@store_area_quality_representative')
    ->name('changecontrol.store_area_quality_representative');

Route::get('/changecontrol/quality_representative', 'ChangeControlController@quality_representative')
    ->name('changecontrol.quality_representative');

//NON CONFORMANCE DESCRIPTION
Route::post('/changecontrol/store_non_conformance_description', 'ChangeControlController@store_non_conformance_description')
    ->name('changecontrol.store_non_conformance_description');

Route::get('/changecontrol/non_conformance_descriptions', 'ChangeControlController@non_conformance_descriptions')
    ->name('changecontrol.non_conformance_descriptions');


//NON CONFORMANCE DETAILS
Route::post('/changecontrol/store_non_conformance_details', 'ChangeControlController@store_non_conformance_details')
    ->name('changecontrol.store_non_conformance_details');

Route::get('/changecontrol/non_conformance_details', 'ChangeControlController@non_conformance_details')
    ->name('changecontrol.non_conformance_details');

//CORRECTIVE ACTION
Route::post('/changecontrol/store_corrective_action', 'ChangeControlController@store_corrective_action')
    ->name('changecontrol.store_corrective_action');

Route::get('/changecontrol/corrective_action', 'ChangeControlController@corrective_action')
    ->name('changecontrol.corrective_action');

//FAILURE MODE
Route::post('/changecontrol/insert_failure_mode', 'ChangeControlController@insert_failure_mode')
    ->name('changecontrol.insert_failure_mode');

Route::get('/changecontrol/failure_mode', 'ChangeControlController@failure_mode')
    ->name('changecontrol.failure_mode');

/*
REVIEW FILE
------------------------------
*/

Route::get('/document_control/get_file_to_approve/{id}', 'Document_ControlController@get_file_to_approve')->name('document_control.get_file_to_approve');

