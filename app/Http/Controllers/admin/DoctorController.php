<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deparment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function allDoctor()
    {
        $Doctors = Doctor::latest()->get();
        return view('admin.doctor.all-doctor',compact('Doctors'));
    }
    public function addDoctor()
    {
        $showdeparment = Deparment::latest()->get();
        return view('admin.doctor.add-doctort', compact('showdeparment'));
    }
    // Doctor Send to Database
    public function storeDoctor(Request $request)
    {
        $request->validate([
            'doctor_name' => 'required',
            'deparment_id' => 'required',
            'doctor_degree' => 'required',
            'doctor_designation' => 'required',
            'date' => 'required',
            'room_number' => 'required',
            'doctor_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact_number' => 'required',
            'fee' => 'required',
        ]);
        $dep_id = $request->deparment_id;
        $dep_name = Deparment::where('id', $dep_id)->value('deparment_name');

        $image = $request->file('doctor_image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->doctor_image->move(public_path('Doctors-Image'), $img_name);
        $img_url = 'Doctors-Image/' . $img_name;

        Doctor::insert([
            'doctor_name' => $request->doctor_name,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name,)),
            'degrees' => $request->doctor_degree,
            'designation' => $request->doctor_designation,
            'time_to_patient' => $request->date,
            'room_number' => $request->room_number,
            'img' => $img_url,
            'contact_number' => $request->contact_number,
            'doctor_fee' => $request->fee,
            'deparment_id' => $dep_id,
            'deparment_name' => $dep_name,
        ]);
        Deparment::where('id', $dep_id)->increment('doctor_count', 1);
        return redirect()->route('allDoctor')->with('message', 'Doctor Added Successfully!');
    }
    // Edite Doctor profile 
    public function editeDoctor($id){
        $doctor_info = Doctor::findOrFail($id);
        return view('admin.doctor.edite-doctor', compact('doctor_info'));
    }
    // Doctors Profile Update
    public function updateDoctor(Request $upDoctor){
        $doctor_id = $upDoctor->updated;
        // valid infut fild
        $upDoctor->validate([
            'doctor_name' => 'required',
            'doctor_degree' => 'required',
            'doctor_designation' => 'required',
            'date' => 'required',
            'room_number' => 'required',
            'contact_number' => 'required',
            'fee' => 'required',
        ]);
        
        // Insert database
        Doctor::findOrFail($doctor_id)->update([
            'doctor_name' => $upDoctor->doctor_name,
            'slug' => strtolower(str_replace(' ', '-', $upDoctor->doctor_name)),
            'degrees' => $upDoctor->doctor_degree,
            'designation' => $upDoctor->doctor_designation,
            'time_to_patient' => $upDoctor->date,
            'room_number' => $upDoctor->room_number,
            'contact_number' => $upDoctor->contact_number,
            'doctor_fee' => $upDoctor->fee,
        ]);
        return redirect()->route('allDoctor')->with('message', 'Doctors Profile Update Successfully!');
    }
    // Delete Deparment
    public function deleteDoctor($id){
        $dep_id = Doctor::where('id', $id)->value('deparment_id');
        Doctor::findOrFail($id)->delete();
        Deparment::where('id', $dep_id)->decrement('doctor_count', 1);
        return redirect()->route('allDoctor')->with('message', 'Doctor profile Deleted Successfully!');
    }
    
}
