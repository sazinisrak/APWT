<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function ourTeam(){
        $team = array("Name: Prioty, Sazin Israk  Id: 19-41635-3","Name: Azra, Islam  Id: 19-12345-1");
        return view('team')
        ->with('team', $team);
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
}
