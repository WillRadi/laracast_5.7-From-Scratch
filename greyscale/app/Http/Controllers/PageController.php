<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index()
    {
        $skills = DB::select("SELECT * FROM skills");

        return view('welcome3');
    }

    public function viewSkill($skill)
    {
        return view("skills.{$skill}")->with(compact('skill'));
    }
}
