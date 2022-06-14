<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function show()
    {
       $data= user::all();
        return view('profile',['users'=>$data]);
    }

    function edit(){
        $user=auth()->user();
        $data['user']=$user;
        return view('profile',$data);
    }

    function update(Request $request){
        $request->validate([
            'name'=>'required|min:2|max:100',
            'email'=>'required|min:2|max:100',
            ],[
               'name.required'=>'Name is required',
               'email.required'=>'Email is required',
            ]);

            $user=auth()->user();

            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phoneno'=>$request->phoneno,
                'gender'=>$request->gender,
                'religion'=>$request->religion,
                'birthdate'=>$request->birthdate,
                'address'=>$request->address,
            ]);

            return redirect()->route('edit');

        }
    }
