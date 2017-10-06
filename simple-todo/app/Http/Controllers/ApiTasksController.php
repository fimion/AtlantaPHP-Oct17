<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ApiTasksController extends Controller
{
    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
        'description' => ['required'],
    ];
    //
    public function index()
    {
        $tasks = Task::all();
        return $tasks;
    }

    public function show(Project $project, Task $task)
    {
        return array('project'=>$project,'task'=>$task);
    }

    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        $input['project_id'] = $project->id;
        $task = Task::create( $input );
        return array('project'=>$project,'task'=>$task);
    }

    public function update(Project $project, Task $task, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $task->update($input);
        return array('project'=>$project,'task'=>$task);
    }

    public function destroy(Project $project, Task $task)
    {
        return $task->delete();
    }
}
