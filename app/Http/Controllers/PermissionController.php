<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::latest()->paginate(5);
    
        return view('permissions.index',compact('permissions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
       
        
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
        'registration_number' => 'required',
       'landlord_names' => 'required',
            'landlord_phone_number' => 'required',
            'landlord_ID_number' => 'required',
            'gender' => 'required',
            'current_village' => 'required',
            'current_cell' => 'required',
            'current_sector' => 'required',
            'academic_year' => 'required',
            
        ]);
    
        Permission::create($request->all());
     
       // return redirect()->route('permissions.index')
                        
                      
                        echo"<center>Yes You Have Declared Your OutSide Permission &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/student' target='_parent'>Close</a></center>";
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
       
            return view('permissions.show',compact('permission'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit',compact('permission'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'registration_number' => 'required',
            'landlord_names' => 'required',
                 'landlord_phone_number' => 'required',
                 'landlord_ID_number' => 'required',
                 'gender' => 'required',
                 'current_village' => 'required',
                 'current_cell' => 'required',
                 'current_sector' => 'required',
                 'academic_year' => 'required',
                 
        ]);
    
        $permission->update($request->all());
    
        return redirect()->route('permissions.index')
                        ->with('success','Permission updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
    
        return redirect()->route('permissions.index')
                        ->with('success','Permission deleted successfully');
    
    }
}
