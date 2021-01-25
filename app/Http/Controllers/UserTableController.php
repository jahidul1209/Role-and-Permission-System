<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTable;
use Illuminate\Support\Facades\Hash;
class UserTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = UserTable::all();
       return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $data = [      
        'name' => $request['name'],
        'username' => $request['username'],
        'email' => $request['email'],
        'area' => $request['area'],
        'phone' => $request['phone'],
        'type' => $request['type'], 
        'team_name' => $request['team_name'],
        'requirement' => $request['requirement'],
        'status' => $request['status'],
       'password' => Hash::make($request->password)
       ];
        $added =  UserTable::create($data);
          
           return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit_user = UserTable::find($id);
       return view('user.edit', compact('edit_user'));
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
       $data = [      
        'name' => $request['name'],
        'username' => $request['username'],
        'email' => $request['email'],
        'area' => $request['area'],
        'phone' => $request['phone'],
        'type' => $request['type'], 
        'team_name' => $request['team_name'],
        'requirement' => $request['requirement'],
        'status' => $request['status'],
       'password' => Hash::make($request->password)
       ];
        $added =  UserTable::create($data);
          
           return redirect()->route('users.index');
       UserTable::where('id', $id)->update($data);
       return redirect()->route('user.index');
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
}
