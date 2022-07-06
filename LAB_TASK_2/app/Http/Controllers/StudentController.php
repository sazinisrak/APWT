<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $student = array();
        for($i = 0; $i<10; $i++){
             $student = array(
                "name"=>"Student".($i+1),
                "id"=>"0".($i+1),
                "dob"=>"10-10-10"
             );
             $students[] = (object)$student;
        }
        return view('Pages.Student.list')->with('students', $students);
    }

    public function login(){
        return view('Pages.Student.login');
    }

    public function loginSubmit(Request $request){
         $validate = $request->validate([
                'userName' => 'required',
                'password' => 'required'
         ]);

         $userName = $request->input('userName');
         $password = $request->input('password');

         if($userName === "Amir" && $password === "1234"){
            return view('home');
         }
         else{
            return "User name and Password do not match";
         }
         
    }
    public function registration(){
        return view('Pages.Student.registration');
    }
    public function registrationSubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:5|max:10',
            'id' => 'required',
            'dob' => 'required',
            'phone' => 'required|min:11|max:14',
            'email' => 'email'
        ],
        [
            'name.required'=>'Enter Your Name'
        ]
    );
        return view('home');
    }

    public function logout(){
        return view('Pages.Student.login');
    }
}
