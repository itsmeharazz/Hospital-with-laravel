<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Deparment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $allDeparment = Deparment::latest()->get();
        $allDoctors = Doctor::latest()->take(8)->get();
        return view('fronted.home', compact('allDeparment','allDoctors'));
    }
}
