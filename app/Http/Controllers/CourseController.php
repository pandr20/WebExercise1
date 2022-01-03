<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index')->with('courses',Course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create')->with(['departments' => Department::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;

        $course->name = $request->name;
        $course->code = $request->code;
        $course->ects = $request->ects;
        $course->department_id = $request->department;
        $course->description = $request->description;

        $course->save();

        return redirect('/courses')->with('message', "Course {$course->code} created successfully");;

        // Course::create([
        //     'name' => $request->name,
        //     'code' => $request->code,
        //     'ects' => $request->ects,
        //     'department_id' => $request->department,
        //     'description' => $request->description

        // ]); 
        

        // return redirect()->route("Course.index")->with('message', "Course {$request->code} created successfully");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function show($id)
    {
        $course = Course::find($id);
        $department = Department::find($id);

        return view('courses.show')->with('course', $course)->with('department', $department)->with('courses', Course::where('department_id', $department->id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *@param  int  $id
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id)->first();

        return view('courses.edit')->with('course', $course)->with(['departments' => Department::all()]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $department = Department::find($id);
       
         

        $course->name = $request->input('name');
        $course->code = $request->input('code');
        $course->ects = $request->input('ects');
        $course->department_id = $request->input('department');
        $course->description = $request->input('description');
        $course->save();



return redirect()->route("course.show", $course->id)->with('message', "Course {$course->code} updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/courses')->with('message', "Course {$course->code} successfully removed");
    }
}
