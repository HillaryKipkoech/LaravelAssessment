<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return Task::all();
        
    }
    // store 
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()-> json($task,201);
    }
    public function show(Task $task)
    {
       return $task;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task -> update($request->all());
        return response()->json($task,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Task $task)
    {
        $task ->delete();
        return response()->json(null,204);
    }
}
