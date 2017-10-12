<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class ApiTasksController extends Controller
{
    protected $rules = [
        'name' => ['required', 'min:3'],
        'description' => ['required'],
    ];
    //
    public function index()
    {
        $tasks = Task::all();
        return $tasks;
    }

    public function show(Task $task)
    {
        return array('task'=>$task);
    }

    public function create(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->input();
        $task = Task::create( $input );
        return array('task'=>$task);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->input();
        $task = new Task();
        $task->name = $input['name'];
        $task->description = $input['description'];
        $task->save();
        //task = Task::create( $input );
        return array('task'=>$task);
    }

    public function update(Task $task, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->input();
        $task->update($input);
        return array('task'=>$task);
    }

    public function destroy(Task $task)
    {
        return $task->delete();
    }
}
