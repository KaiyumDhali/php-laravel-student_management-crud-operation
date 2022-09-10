<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{

    private $students,$student;
  public function index(){
      return view('student.index');
  }
  public function addCourse()
  {
      return view('student.course');
  }
  public function create(Request $request)
  {
      Student::newCourse($request);
      return redirect('/student-course')->with('message','Course info Save successfully.');
  }

    public function manage()
    {
        Session::put('id',100);
        $this->student = Student::all();
        return view('student.me',['students'=>$this->student]);
    }
    public function update($id)
    {
        $this->student = Student::find($id);
        return view('student.edit',['student' => $this->student]);
    }

    public function edit(Request $request,$id)
    {
        Student::updateStudent($request,$id);
        return redirect('/student-me')->with('message','Course info Update successfully.');
    }

    public function delete($id)
    {
        Student::deleteStudent($id);
        return redirect('/student-me')->with('message','Student info Delete successfully.');

    }

}
