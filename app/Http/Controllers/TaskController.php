<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\Http\Controllers\View;

class TaskController extends Controller
{
    public function getTasks() {
        $tasks = task::all();
        return view('task/list_of_tasks')->with('tasks', $tasks);
    }

    public function saveTask(Request $request) {
        $task = task::create($request->all());
        $task->save();

        return redirect('/');
    }

    public function editTask($id) {
        $task = task::find($id);

        return view('task/edit-task')->with('task', $task);
    }

    public function viewTask($id) {
        $task = task::find($id);
        return view('task/view-task')->with('task', $task);
    }

    public function completeTask($id) {
        $task = task::find($id);
        $task->status = 'done';
        $task->save();

        return redirect('/');
    }

    public function updateTask(Request $req) {
        $task = task::find($req->all()["id"]);
        $task->title = $req->all()["title"];
        $task->description = $req->all()["description"];
        $task->status = $req->all()["status"];
        $task->save();

        return redirect('/');
    }

    public function deleteTask($id) {
        $task = task::find($id);
        $task->delete();

        return redirect('/');
    }
}
