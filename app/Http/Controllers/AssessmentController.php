<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\health_assessment;

class AssessmentController extends Controller
{

    function show()
    {
       $data= health_assessment ::all();
        return view('assessment',['health_assessments'=>$data]);
    }
}
