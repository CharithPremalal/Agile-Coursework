<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Tasks;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = null;
        $tasks = Tasks::all();

        $done = Tasks::where('isCompleted' , '=' , '1')->count();
        $pending = Tasks::where('isCompleted' , '=' , '0')->count();
        $total = Tasks::count();

        
        $donePercentage = ($done/$total)*100;
        $doneRound = intval($donePercentage);

        $pendingpercentage = ($pending/$total)*100;
        $donePending = intval($pendingpercentage);


    
        return view('Admin.dashboard', compact('tasks','done', 'pending','total','doneRound','donePending'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $roles = Role::pluck('name','id')->all();
        return view('Admin.employee-list-add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if(trim($request->password) == ''){

            $input = $request->except('password');
        }else{

            
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }


        // dd($request->all());
        // User::create($request->all());

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id'=>$request['role_id'],
            'location'=>$request['location'],
            'phone_number'=>$request['phone_number'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/employee-list');
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
        
        $employee = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();

        return view('Admin.employee-list-edit', compact('employee','roles'));
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

        $employee = User::findOrFail($id);

       
        
        if(trim($request->password) == ''){

            $input = $request->except('password');
        }else{

            
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $employee->update($input);

        return redirect('/employee-list');
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


    public function EmployeeList(){


        $employees = User::all();

        return view('Admin.employee-list', compact('employees'));
    }
}
