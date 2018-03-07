<?php

use App\Task;

Route::get('/tasks', function () {
	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
	$task = Task::find($id);
	//Task::incomplete()->get();
    return view('tasks.show', compact('task')) ;
});