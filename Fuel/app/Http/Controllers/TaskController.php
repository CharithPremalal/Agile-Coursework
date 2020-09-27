<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('Admin.to-do-list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::pluck('name','id')->all();
        // $users = User::where('role_id', '=', '1')->pluck('name','id');
        $tasks = Tasks::all();
        $employees = User::all();


        return view('Admin.to-do-list-add' , compact('users', 'employees', 'tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
           Tasks::create($request->all());

           
        

        return redirect('admin/to-do-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $task = Tasks::findOrFail($id);
        $users = User::pluck('name','id')->all();
        $tasks = Tasks::all();
        $employees = User::all();

        return view('Admin.to-do-list-edit', compact('task','users','tasks','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $task = Tasks::findOrFail($id);

        $input = $request->all();   

        $task->update($input);

        return redirect('/to-do-list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function TaskList(){


        $tasks = Tasks::all();

        return view('Admin.to-do-list', compact('tasks'));
    }


    public function markascompleted($id){

        $task = Tasks::find($id);
        $task->isCompleted = 1;
        $task->save();

        return redirect()->back();

    }

    public function markasnotCompleted($id){

        $task = Tasks::find($id);
        $task->isCompleted = 0;
        $task->save();

        return redirect()->back();

    }
}
