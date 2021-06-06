<?php

namespace App\Http\Controllers;

use App\Events\SendTask;
use App\Models\Task;
use App\Models\User;
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
        return view('user.showTasks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , User $user)
    {

        try {
            Task::create([
                'user_id'=>$user->id,
                'task'  => $request->task
            ]);

            SendTask::dispatch($user->id,$request->task);
            return response()->json([
                'code'    => '200',
                'status' =>'success',
                'message' => 'task sent'

            ]);
        }
        catch (\Exception $e){
            return response()->json([
                'code'    => $e->getCode(),
                'status' =>'failed',
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(User $user , Request $request)
    {

        return view('admin.Task.SendTask',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
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
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
    public function UserTasks (Request $request , User $user){

            return response()->json([
               'message' => 'success',
               'tasks'   => $user->tasks
            ]);

    }
}
