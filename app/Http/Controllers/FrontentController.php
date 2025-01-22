<?php

namespace App\Http\Controllers;

use App\Models\User;


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
        return view('controlPanel');
        // return redirect()->route('controlPanel');
    }
    public function studentstable()

    {
        $users = User::all();
        // $students = Student::find(12);
        // $students = Student::where('studentId',8)->get();
        // return $students;
        return view("studentstable", compact('users'));
    }
    public function addStudents()
    {

        return view("addStudents");
    }
    public function saveStudent(Request $request)
    {
        request()->validate([
            'name' => 'required|min:6|max:10',
            'cname' => 'required|min:8|max:11',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:students,email',
            'dob' => 'required',
        ]);

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

        $student = new User;

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
        $student = User::find($studentId);
        return view('editStudent', compact('student'));
        // return $student->date_of_birth;
        // return view("editStudent");
    }
    public function updateStudent(Request $request)
    {
        // return $request->except('_token');



        $studentId = decrypt($request->studentId);
        $student = User::find($studentId);

        // return $request->all();

        $student = User::find($studentId)->update([
            'name' => $request->name,
            'course_name' => $request->cname,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
        ]);
        return redirect()->route('studentstable')->with('message' ,'Student Get Updated');
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
   
    public function login()
  {
    // session()->forget('userId');
    return view('login');
  }
  public function register()
  {
   
    return view('register');
  }
  public function dologin()
  {
    // if(auth()->attempt([
    //     'email' => request('email'),
    //     'password' => request('password')
    //     ]))
    // {
    //   return 'login successfull';
    // }
    // else{
    //   return 'login failed';
    // }
}
}