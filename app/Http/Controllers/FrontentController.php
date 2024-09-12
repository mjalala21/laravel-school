<?php

namespace App\Http\Controllers;

use App\Models\Student;


use Illuminate\Http\Request;

class FrontentController extends Controller
{
    public function index()
    {
        return view("homepage");
    }


    public function about()
    {
        return view("about");
    }
    public function course()
    {
        return view("course");
    }
    public function controlPanel()
    {
        return view("controlPanel");
    }
    public function studentstable()

    {
        $students = Student::all();
        // $students = Student::find(12);
        // $students = Student::where('studentId',8)->get();
        // return $students;
        return view("studentstable", compact('students'));
    }
    public function addStudents()
    {

        return view("addStudents");
    }
    public function saveStudent(Request $request)
    {
        $name = $request->name;
        $course_name = $request->cname;
        $gender = $request->gender;
        $address = $request->address;
        $email = $request->email;
        $date_of_birth = $request->dob;

        // Student::create([
        //     'name'=>$name,
        //     'course_name'=>$course_name,
        //     'gender'=>$gender,
        //     'address'=>$address,
        //     'email'=>$email,
        //     'date_of_birth'=>$date_of_birth,
        // ]);
        // $student= new Student;

        // $student->name=$request->name;
        // $student->course_name=$request->cname;
        // $student->gender=$request->gender;
        // $student->address=$request->address;    //single use
        // $student->email=$request->email;
        // $student->date_of_birth=$request->dob;

        // $student->save();

        $student = new Student;

        $student->name = $name;
        $student->course_name = $course_name;
        $student->gender = $gender;
        $student->address = $address;
        $student->email = $email;
        $student->date_of_birth = $date_of_birth;

        $student->save();

        return redirect()->route('studentstable')->with('message', 'Student get added Succesfully');
        // return view("saveStudent");
    }
    public function editStudent($i)
    {
        $studentId = decrypt($i);
        $student = Student::find($studentId);
        return view('editStudent', compact('student'));
        // return $student->date_of_birth;
        // return view("editStudent");
    }
    public function updateStudent(Request $request)
    {
        // return $request->except('_token');


    
        $studentId = $request->studentId;
        $student = Student::find($studentId);

        return $request->all();

        // $student = Student::find($studentId)->update([
        //     'name' => $request->name,
        //     'course_name' => $request->cname,
        //     'gender' => $request->gender,
        //     'address' => $request->address,
        //     'email' => $request->email,
        //     'date_of_birth' => $request->dob,
        // ]);
        // return "Updated";
    }
    public function deleteStudent()
    {
        // return view("deleteStudent");
    }
    public function viewStudent()
    {
        // return view("viewStudent");
    }
    public function contact()
    {
        return view("contact");
    }
    public function logIn()
    {
        return view("logIn");
    }
    public function signIn()
    {
        return view("signIn");
    }
}
