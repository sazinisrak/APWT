<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Admin;
use App\Models\Employee;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class MemberController extends Controller
{
   
    public function signIn()
    {
        return view('member.signIn');
    }

    public function signInSubmitted(Request $request){
        $rules=[
            "username"=>"required",
            'password'=>'required|min:6'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'password.min' => 'Minimum 5 Character',
        ];
        $this->validate($request, $rules, $messages );

        $member = Member::whereRaw("BINARY username = '$request->username'")->first();


        if(!empty($member)){
            if (Hash::check($request->password, $member['password'])) {
                if($member['type'] == 'admin'){
                    $admin = Admin::whereRaw("BINARY username = '$request->username'")->first();
                    $request->session()->put('admin', $admin);
                    return redirect()->route('adminDash');
                }
                else if($member['type'] == 'employee'){
                    $employee = Employee::whereRaw("BINARY username = '$request->username'")->first();
                    $request->session()->put('employee', $employee);
                    return redirect()->route('employeeDash');
                }
            }
            else{
                return view('member.signIn')->with('error_message', "Information not found");
            }
        }
        else{
            return view('member.signIn')->with('error_message', "Information not found");
        }

    }

    public function logout(){
        if( Session::has('admin') ){
            session()->forget('admin');
        }
        else if( Session::has('employee') ){
            session()->forget('employee');
        }

        return redirect()->route('signIn');
    }
}
