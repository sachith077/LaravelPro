<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Task;

class TaskController extends Controller
{
    public function store(request $request){
        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);

        $task=new Task;  /*  creating an object from the Task model */
        $task->task=$request->task; /* asseuming  the post requested task data to the task table's task column */
        $task->save();  /* flushing the data to database task table */
        /*  dd($request->all()); is for testing . 
        request is class for catching data from the submited form and $request is a obeject of request class */
    }
}
