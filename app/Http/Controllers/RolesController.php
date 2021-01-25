<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('backend.pages.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $role = Role::all();
        $allpermissions = Permission::all();
        $permissions_group = User::permissionByGroup();
        session()->flash('Success','Role Has Deleted');
        return view('backend.pages.roles.create',compact('role','allpermissions','permissions_group'));
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
                'name' => 'required|max:50|unique:roles'
            ],[
                'name.required'=>'Please give a role'
            ] );

         $role = Role::create(['name' => $request->name]);
         $permission = $request->input('permissions','role');

         if(!empty($permission)){
            $role->syncPermissions($permission);
         }
         session()->flash('success','Role Has Created');
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
        $role = Role::findById($id);
        $allpermissions = Permission::all();
        $permissions_group = User::permissionByGroup();
        session()->flash('Success','Role Has Deleted');
        return view('backend.pages.roles.edit',compact('role','allpermissions','permissions_group'));
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

          $request->validate([
                'name' => 'required|max:50'
            ],
            [
                'name.required'=>'Please give a role'
            ] );

         $role = Role::findById($id);
         $permission = $request->input('permissions','role');

         if(!empty($permission)){
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permission);
         }
         session()->flash('success','Role Has Updated');
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
        $role = Role::findById($id);
        if(!is_null($role)){
            $role->delete();
        } 
        session()->flash('success','Role Has Deleted');
        return redirect()->back();
    }
}
