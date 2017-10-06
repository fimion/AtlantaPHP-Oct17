<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
class ApiProjectsController extends Controller
{

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];
    //
    public function index()
    {
        $projects = Project::all();
        return $projects;
    }

    public function show(Project $project){

        return array('project'=>$project, 'tasks'=> $project->tasks()->get());

    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $project = new Project;
        $project->name = $request->name;
        $project->slug = $request->slug;
        $project->save();
        return $project;
    }

    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except($request->all(), '_method');
        return $project->update($input);
    }

    public function destroy(Project $project)
    {
        return $project->delete();
    }
}
