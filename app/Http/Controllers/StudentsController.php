<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students= Student::all();
        return view("students.index",["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("students.create");
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
        //dump($request);  ### $request ===== request()

        #validation
//        dd($request["name"]);
        $request->validate([
            "name"=>"required|min:5",   # $request["name"] ! = ""
            "email"=>"required|email",
            "age"=>"numeric"
        ]);

        Student::create([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "phone"=>$request["phone"],
            "age"=>$request["age"],
            "confirmemail"=>"welcome"
        ]);

        return redirect(route("students.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view("students.show",["student"=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view("students.edit",["student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            "name"=>"required|min:5",   # $request["name"] ! = ""
            "email"=>"required|email",
            "age"=>"numeric"
        ]);
//        dump($request);
//        dump($student);
//        $student
//        $student->fill([
//            "name"=>$request["name"],
//            "email"=>$request["email"],
//            "age"=>$request["age"],
//            "phone"=>$request["phone"],
//        ]);
//        $student->save();


        $student->update([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "age"=>$request["age"],
            "phone"=>$request["phone"]
            ]);

        return redirect(route("students.index"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        //dd($student);
        $student->delete();
        return redirect(route("students.index"));
    }
}
