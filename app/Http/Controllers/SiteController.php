<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function sign_up(){
        return view('auth.signup');
    }

    public function register(SignUpRequest $request){

//        $request->validate([
//            'first_name'=>'required|string|min:4|max:28',
//            'last_name'=>'required|string',
//            'email'=>'required|email|',
//            'password'=>'required||',
//        ],[
//            'first_name.required' =>'First Name  is must',
//            'last_name.required' =>'Last Name  is required',
//            'email.required' =>'Email  is must',
//            'password.required' =>'Password  is must',
//
//        ]);
//        dd($request->except('_token'));
    }

}
