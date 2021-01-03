<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    # function that can retrive all the students
    #
    #

    public function getStudents(){
        $students= Student::all();
////        dd($students); # dump all the info about the variable and stop exexutiopn
//        dump($students);  #
        return view("students.index",["students"=>$students]);
    }

    public function create(){
//        dd("welcome");
        return view("students.create");
    }

    public function store(){
//        dd($_POST);
//        dd("hello");
        $data=request();
//        dd($data);
//        $data["name"];
//        return $data->name;

        $student= new Student;
        $student->name=request("name");
        $student->email=request("email");
        $student->age=request("age");
        $student->phone=request("phone");
        $student->save();

        return redirect("allstudnets");
    }

    public function show($id){
//        dd($id);
        $student= new Student;
//        $student=$student->find($id);
        $student=$student->findorfail($id);
//        dd($student);
        return view("students.show",["student"=>$student]);
    }

    ## need to retrive a page to display the item
    public function edit($id){
        $student= new Student;
        $student=$student->findorfail($id);
        return view("students.edit",["student"=>$student]);
    }

    public function update($id){
//       dump($id);
//       dump(request());
        $student= new Student;
        $student=$student->findorfail($id);
        $student->name=request("name");
        $student->email=request("email");
        $student->age=request("age");
        $student->phone=request("phone");
        $student->save();
        return redirect(route("student.show",$id));
    }

    # this function used to delete the student

    function destroy($id){
        $student= new Student;
        $student=$student->findorfail($id);
        $student->delete();
        return redirect("/allstudnets");
    }
}



