<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use App\Models\Deparment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;

class ClintControlller extends Controller
{
    public function deparment(){
        $deparments = Deparment::get();
        return view('fronted.deparment', compact('deparments'));
    }
    public function deparmentDetails($id){
        $deparments = Deparment::findOrFail($id);
        $doctorsProfile = Doctor:: where('deparment_id',$id)->latest()->get();
        return view('fronted.deparment-details', compact('deparments','doctorsProfile'));
    }
    public function doctor(){
        $doctors = Doctor::get();
        return view('fronted.doctrs', compact('doctors'));
    }
    public function contact(){
        return view('fronted.contact-us');
    }
    public function doctorDtails($id){
        $docID = Doctor::findOrFail($id);
        return view('fronted.doctor-dtails',compact('docID'));
    }
    public function appointment(){
        return view('fronted.appointment');
    }
    public function addAppointment(Request $request){
        $doctorFee = $request->doc_fee;
        appointment::insert([
            'doctor_id'=> $request->doc_id,
            'user_id' => Auth::id(),
            'fee' => $doctorFee,
        ]);
        return redirect()->route('confromAppointment')->with('message','Add appointment succesfully');
    }
    public function confromAppointment(){
        return view('fronted.confrom-appointment');
    }
    public function userProfile(){
        return view('fronted.user-profile');
    }
}
