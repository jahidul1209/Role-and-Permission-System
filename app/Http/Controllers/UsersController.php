<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        
        $users = User::all();
        return view('backend.pages.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();

        session()->flash('Success','Role Has Deleted');
        return view('backend.pages.users.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
               'name' => 'required|max:50',
                'email' => 'required|max:50|unique:users',
                'phone' => 'required|max:11',
                'password' => 'required',
            ],
             [
                'name.required'=>'Please give a Name'
            ] );
      $data = [      
        'name' => $request['name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        // 'role' => $request['role'],
       'password' => Hash::make($request->password)
       ];

         $user = User::create($data);
         if($request->role){
            $user->assignRole($request->role);
         }
         session()->flash('success','User Has Created');
         return redirect()->back();
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
        $role = Role::all();
        $user = User::find($id);
        session()->flash('Success','User Has Deleted');
        return view('backend.pages.users.edit',compact('role','user'));
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
       $user = User::find($id);
       $request->validate([
               'name' => 'required|max:50',
                'email' => 'required|max:50|unique:users,email,'.$id,
                'phone' => 'required|max:11',
                'password' => 'required',
            ],
             [
                'name.required'=>'Please give a Name'
        ] );

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        
         $user->save();
         // $user->role()->detach();
         if($request->role){
            $user->assignRole($request->role);
         }
        
         session()->flash('success','User Has Updated');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::find($id);
        if(!is_null($user)){
            $user->delete();
        } 
        session()->flash('success','User Has Deleted');
        return redirect()->back();
    }
}
