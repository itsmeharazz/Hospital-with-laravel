<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function pendingappointment(){
        return view('admin.appointment.pending-appointment');
    }
    public function confromappointment(){
        return view('admin.appointment.confrom-appointment');
    }
}
