<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeEditorController extends Controller
{
    function show(){
    return view('homeeditor');
    }
}
