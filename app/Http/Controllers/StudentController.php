<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Student::all();

        return view('student.index',compact('students'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            
            'name' => 'required',
            'roll' => 'required',
            'massage' => 'required'
        ]);

        $student = new Student();

        $student->name = $request->get('name');
        $student->roll = $request->get('roll');
        $student->massage = $request->get('massage');
        $student->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student,$id)
    {
        $student = Student::find($id);
        return view('student.show',compact('student'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $student = Student::find($id);
      return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student,$id)
    {
        $request->validate([
            'name'  => 'required',
            'roll'  => 'required',
            'massage' => 'required'
        ]);

        $students = Student::find($id);

        $students->name = $request->get('name');
        $students->roll = $request->get('roll');
        $students->massage = $request->get('massage');
        $students->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {
        Student::destroy($id);
        return redirect('/');
    }
}
