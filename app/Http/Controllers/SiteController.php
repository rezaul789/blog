<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class SiteController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function sign_up(){
        return view('auth.signup');
    }

    public function register(Request $request){

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



        $validator = Validator::make($request->all(),
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'password' => 'required',

            ],
            [
                'first_name.required' => 'First Name is needed',
                'last_name.required' => 'Last Name is needed',
                'email.required' => 'Email is needed',
                'password.required' => 'Password is needed',
            ]
        );
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

//        $user=new User();
//        $user->first_name=$request->first_name;
//        $user->last_name=$request->last_name;
//        $user->email=$request->email;
//        $user->password=$request->password;
//        $user->save();

            User::create($request->except('_token'));

//        User::create([
//            'first_name'=>$request->first_name,
//            'last_name'=>$request->last_name,
//            'email'=>$request->email,
//            'password'=>Hash::make($request->password)
//        ]);


        return redirect()->back();




    }


}
