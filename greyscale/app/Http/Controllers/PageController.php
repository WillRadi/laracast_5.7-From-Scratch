<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use DB;

class PageController extends Controller
{
    public function index()
    {
        $skills = Skill::All();

        return view('skill_block')->with(compact('skills'));
    }
}
