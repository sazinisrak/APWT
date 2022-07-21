<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('validEmployee');
    }
    public function dashboard()
    {
      return view('employee.dashboard');
    }

    public function viewProfile()
    {
      return view('employee.viewProfile');
    }

    public function editProfile()
    {
      return view('employee.editProfile');
    }

    public function editProfileSubmitted(Request $request)
    {
      $rules = [
        "name" => "required|max:20",
        'email' => 'required|email',
      ];
      $messages = [
        'required' => "Please fill this fild",
        'name.max' => "Name can not exceed 20 characters",
        'email.email' => "Wrong formet",
      ];
      $this->validate($request, $rules, $messages);
  
      $employee_info = session()->get('employee');
  
      $employee = Employee::where('username', $employee_info['username']);
      $employee->update(['name' => $request->name, 'email' => $request->email]);
  
  
      $employee_info['name'] = $request->name;
      $employee_info['email'] = $request->email;
  
      session()->put('employee', $employee_info);
  
      return view('employee.editProfile')->with('success_msg', "Information Updated");
    }
}
