<?php

Use App\Task;
use Illuminate\Http\Request;


Route::get('tasks', function() {
    return Task::all();
});

Route::get('tasks/{id}', function($id) {
    return Task::find($id);
});

Route::post('tasks', function(Request $request) {
    return Task::create($request->all());
});

Route::put('tasks/{id}', function(Request $request, $id) {
    $task = Task::findOrFail($id);
    $task->update($request->all());

    return $article;
});

Route::delete('tasks/{id}', function($id) {
    Task::find($id)->delete();

    return 204;
});