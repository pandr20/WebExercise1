<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Resources\views\departmentIndex;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
       
       return view('departments.index')->with('departments',Department::all());
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        
        $department = new Department;

         $department->name = $request->name;
         $department->code = $request->code;
         $department->description = $request->description;

         $department->save();

         return redirect('/departments')->with('message', "Department {$department->code} successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);

        

        return view('departments.show')->with('department', $department)->with('courses', Course::where('department_id', $department->id)->get());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id)->first();

        return view('departments.edit')->with('department', $department);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
        $department = Department::find($id);
       
         

             $department->name = $request->input('name');
             $department->code = $request->input('code');
             $department->description = $request->input('description');
             $department->save();
    
     
    //return redirect("/departments/{{ $department->id }}")->with('message', "Department {$department->code} successfully created");;
    return redirect()->route("show", $department->id)->with('message', "Department {$department->code} updated successfully");

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function destroy(Department $department, Course $course)
    {
    
    
    $department->delete();
    return redirect('/departments')->with('message', "Department {$department->code} successfully removed");
    
}
}