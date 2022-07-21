<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Admin;
use App\Models\Employee;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
class AdminController extends Controller
{
  public function dashboard()
  {
    return view('admin.dashboard');
  }

  public function viewProfile()
  {
    return view('admin.viewProfile');
  }

  public function editProfile()
  {
    return view('admin.editProfile');
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

    $admin_info = session()->get('admin');

    $admin = Admin::where('username', $admin_info['username']);
    $admin->update(['name' => $request->name, 'email' => $request->email]);


    $admin_info['name'] = $request->name;
    $admin_info['email'] = $request->email;

    session()->put('admin', $admin_info);

    return view('admin.editProfile')->with('success_msg', "Information Updated");
  }

  public function employeeAdd()
  {
    return view('admin.employeeAdd');
  }

  public function employeeAddSubmitted(Request $request)
  {
    $rules = [
      "username" => "required|unique:members,username",
      "name" => "required|min:5|max:20",
      'email' => 'required|email|unique:employees,email',
      'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/'
    ];
    $messages = [
      'required' => "Please fill this fild",
      'username.unique' => "username already exists",
      'email.unique' => "Email already exists",
      'email.email' => "Wrong formet",
      'password.min' => 'Minimum 5 Character',
      'password.regex' => 'Must contain at least one number and one uppercase and lowercase letter and one $ or # or % or @'
    ];
    $this->validate($request, $rules, $messages);


    $member = new Member();
    $member->username = $request->username;
    $member->password = Hash::make($request->password);
    $member->type = "employee";
    $member->save();

    $employee = new  Employee();
    $employee->username = $request->username;
    $employee->name = $request->name;
    $employee->email = $request->email;
    $employee->picture = '../assets_2/images/faces/default.png';
    $employee->save();

    return view('admin.employeeAdd')->with('success_msg', "Employee successfully added!");
  }


  public function employeeList(){

    $employees = Employee::paginate(2);

    if(Session::has('success_msg'))
    {
      $success_msg = session()->get('success_msg');
      session()->forget('success_msg');
      return view('admin.employeeList')->with('employees', $employees)->with('success_msg', $success_msg);
    }

    else if(Session::has('error_message'))
    {
      $error_message = session()->get('error_message');
      session()->forget('error_message');
      return view('admin.employeeList')->with('employees', $employees)->with('error_message', $error_message);
    }

    return view('admin.employeeList')->with('employees', $employees);
  }

  public function editEmployee(Request $request)
  {
    $employee = Employee::where('username', $request->username)->first();

    return view('admin.editEmployee')->with('employee', $employee);
  }

  public function editEmployeeSubmitted(Request $request)
  {
    $rules = [
      "name" => "required|min:5|max:20",
      'email' => ["required",'email',Rule::unique('employees')->ignore($request->username, 'username')],
    ];
    $messages = [
      'required' => "Please fill this fild",
      'email.unique' => "Email already exists",
      'email.email' => "Wrong formet"
    ];
    $this->validate($request, $rules, $messages);

    Employee::where('username',$request->username)->update(['name' => $request->name, 'email' => $request->email]);


    return redirect()->route('employeeList');
  }


  public function employeeDelete(Request $request)
  {
    $is_deleted_employee = Employee::where('username',$request->username)->delete();
    $is_deleted_member = Member::where('username',$request->username)->delete();

    if($is_deleted_employee && $is_deleted_member){
      return redirect()->route('employeeList')->with([ 'success_msg' => "Employee deleted" ]);

    }
    
    return redirect()->route('employeeList')->with([ 'error_message' => "Employee not deleted" ]);
  }


  public function APIEmployeeList(){

    $employees = Employee::all();

    return $employees;
  }

  public function APIemployeeAdd(Request $request)
  {

    $member = new Member();
    $member->username = $request->username;
    $member->password = Hash::make($request->password);
    $member->type = "employee";
    $member->save();

    $employee = new  Employee();
    $employee->username = $request->username;
    $employee->name = $request->name;
    $employee->email = $request->email;
    $employee->picture = '../assets/images/faces/default.png';
    $employee->save();

    return $request;
  }
}
