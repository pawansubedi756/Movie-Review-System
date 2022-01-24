<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('adminlogin');
    }

    public function adminpanel(){
        return view('adminpanel');
    }


    public function login(Request $request){
        return redirect('/adminpanel');
    }
}
