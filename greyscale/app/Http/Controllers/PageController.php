<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index()
    {
        $skills = DB::select("SELECT * FROM skills");

        return view('skill_block')->with(compact('skill'));
    }

    public function viewSkill($skill)
    {
        return view("skills.{$skill}")->with(compact('skill'));
    }
}
