<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\patient;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient');
    }
    public function store(Request $request)
    {
        $data = new patient;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phoneno = $request->phoneno;
        $data->save();
        return redirect('home');
    }
}
