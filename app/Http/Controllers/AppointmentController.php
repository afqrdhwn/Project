<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\appointment;

class AppointmentController extends Controller
{
    function show()
    {
       $data= appointment ::all();
        return view('appointment',['appointments'=>$data]);

    }

    public function index()
    {
        return view('newappointment');
    }

    public function store(Request $request)
    {
        $data = new appointment;
        $data->patient_id  = $request->patient_id;
        $data->appt_date = $request->appt_date;
        $data->appt_time = $request->appt_time;
        $data->save();
        return redirect('appointment');
    }


}
