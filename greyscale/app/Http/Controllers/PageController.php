<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index()
    {
        $skills = DB::select("SELECT * FROM skills");

        return view('skill_block')->with(compact('skills'));
    }

    public function viewSkill($skill)
    {
        $skillId = DB::select("SELECT * FROM skills WHERE name = '{$skill}'");
        $techn = DB::select("SELECT * FROM techniques WHERE skill_id = '{$skillId[0]->id}'");

        return view("skills.main")->with(compact('skill', 'techn'));
    }
}
