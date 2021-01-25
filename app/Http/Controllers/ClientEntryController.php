<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientEntry;
use DB;

class ClientEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ClientEntry::where('status', 'Pendding')->get();
        return view('client_entry.index',compact('data'));
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
    public function store(Request $request)
    {
       $data = [      
        'client_name' => $request['client_name'],
        'organization' => $request['organization'],
        'address' => $request['address'],
        'area' => $request['area'],
        'phone' => $request['phone'],
        'office_phone' => $request['office_phone'], 
        'level' => $request['level'],
        'requirement' => $request['requirement'],
        'status' => $request['status'],
        'comment' => $request['comment'],
       ];
        $added =  ClientEntry::create($data);
          
           return redirect()->route('client_entry.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
         ClientEntry::find($id)
                   ->update(['status'=>'Success']); 
            return redirect()->back();      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit_emp = ClientEntry::find($id);
       return view('client_entry.edit', compact('edit_emp'));
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
       ClientEntry::where('id', $id)->update($request->all());
       return redirect()->route('client_entry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delete = ClientEntry::find($id);
          $delete->delete();
          return redirect()->back();
    }
}
