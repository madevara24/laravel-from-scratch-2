<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task)
    {
        // if (request()->has('completed')) {
        //     $task->complete();
        // } else {
        //     $task->incomplete();
        // }

        // request()->has('complete') ? $task->complete() : $task->incomplete();

        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method;

        return back();
    }
}
