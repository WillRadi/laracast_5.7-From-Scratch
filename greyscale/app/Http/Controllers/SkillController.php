<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technique;
use App\Skill;
use DB;

class SkillController extends Controller
{
    public function viewSkill($skill)
    {
        $skillId = DB::select("SELECT * FROM skills WHERE name = '{$skill}'");
        $techn = DB::select("SELECT * FROM techniques WHERE skill_id = '{$skillId[0]->id}'");

        $skillLabel = $skillId[0]->label;

        return view("skills.view")->with(compact('skillLabel', 'techn'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store()
    {
        $skill = new Skill();
        $techniques = [];

        $skill->label = request('label');
        $skill->name = strtolower(str_replace(" ", "_", $skill->label));
        $skill->description = request('description');
        
        $skill->save();

        $newSkill = DB::table('skills')->where('name', $skill->name)->first();
        
        $techniques = explode(',', request('techn'));

        foreach($techniques as $t)
        {
            $techn = new Technique();
            $techn->name = trim($t);
            $techn->skill_id = $newSkill->id;

            $techn->save();
        }

        return redirect('/');
    }
}
