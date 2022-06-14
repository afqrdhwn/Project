<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine_info;

class MedicineController extends Controller
{
    function show()
    {
       $data= medicine_info::all();
        return view('medicine',['medicine_infos'=>$data]);
    }
}
