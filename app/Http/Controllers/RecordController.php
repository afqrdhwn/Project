<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\health_record;

class RecordController extends Controller
{
    function show()
    {
       $data= health_record::all();
        return view('record',['health_records'=>$data]);
    }
}
