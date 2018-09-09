<?php

namespace App\Http\Controllers;

use App\Board_User;
use App\Collaborator;
use App\Page;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    {
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'page_id' => $page->id,
            'user_id' => auth()->user()->id,
            'board_id' => $request->board,
        ]);
        
        Collaborator::create([
            'user_id' => auth()->user()->id,
            'task_id' => $task->id,
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }
    
    public function finish(Task $task)
    {
        $task->finish();
        
        return back();
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
        
        return back();
    }
    
    public function collaborate(Request $request, Task $task)
    {
        Collaborator::create([
            'user_id' => $request->id,
            'task_id' => $task->id,
        ]);
        
        Board_User::create([
            'board_id' => $task->board_id,
            'user_id' => $request->id,
            'admin' => 0,
        ]);
        
        return back();
    }
}
