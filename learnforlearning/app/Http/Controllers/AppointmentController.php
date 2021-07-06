<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function showAppointmentTable(){
        $dates = [];

        //append this day and 6 more to the dates
        $startDate = date("Y-m-01");
        array_push($dates,$startDate);
        $actualMonth = date('m');

        for($i = 1; $i <= 31; $i++){
            $actualDate = date('Y-m-d', strtotime($startDate . ' +' . $i . ' day'));
            $actualDateMonth = date("m",strtotime($actualDate));
            if($actualMonth == $actualDateMonth)
                array_push($dates,$actualDate);
        }
        
        return view('appointments', compact('dates'));
    }
}
