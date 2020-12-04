<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class Iso_Management_ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iso_management_modules');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function folders()
    {
        $folders = Folder::orderBy('id', 'desc')->get();
        return view('folders.index', [
            'folders' => $folders
        ]);
    }
}
