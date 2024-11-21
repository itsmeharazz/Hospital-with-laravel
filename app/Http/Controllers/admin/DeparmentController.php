<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deparment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class DeparmentController extends Controller
{
    public function allDeparment()
    {
        $deparment = Deparment::latest()->get();
        return view('admin.deparment.all-deparment',compact('deparment'));
    }
    public function addDeparment()
    {
        return view('admin.deparment.add-deparment');
    }
    // Deparment send to Database
    public function storeDeparment(Request $request)
    {
        $request->validate([
            'Deparment_name' => 'required|unique:deparments',
            'Deparment_short_des' => 'required',
            'Deparment_long_des' => 'required',
            'Deparment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // add image
        $image = $request->file('Deparment_image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->Deparment_image->move(public_path('Deparment-Image'), $img_name);
        $img_url = 'Deparment-Image/' . $img_name;

        Deparment::insert([
            'deparment_name' => $request->Deparment_name,
            'slug' => strtolower(str_replace(' ', '-', $request->Deparment_name)),
            'shot_des' => $request->Deparment_short_des,
            'long_des' => $request->Deparment_long_des,
            'img' => $img_url,
        ]);
        return redirect()->route('allDeparment')->with('message', 'Deparment Added Successfully!');
    }
    // Deparment Edite 
    public function editeDeparment($id)
    {
        $deparment_info = Deparment::findOrFail($id);
        return view('admin.deparment.edite-deparment', compact('deparment_info'));
    }

    // Deparment Update
    public function updateDeparment(Request $request){
        $deparment_id = $request->deparment_id;
        $request->validate([
            'Deparment_name' => 'required',
            'Deparment_short_des' => 'required',
            'Deparment_long_des' => 'required',
            'Deparment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // add image
        $image = $request->file('Deparment_image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->Deparment_image->move(public_path('Deparment-Image'), $img_name);
        $img_url = 'Deparment-Image/' . $img_name;
        // Insert database
        Deparment::findOrFail($deparment_id)->update([
            'deparment_name' => $request->Deparment_name,
            'slug' => strtolower(str_replace(' ', '-', $request->Deparment_name)),
            'shot_des' => $request->Deparment_short_des,
            'long_des' => $request->Deparment_long_des,
            'img' => $img_url, 
        ]);
        return redirect()->route('allDeparment')->with('message', 'Deparment Update Successfully!');

    }

    // Delete Deparment
    public function deleteDeparment($id){
        Deparment::findOrFail($id)->delete();
        return redirect()->route('allDeparment')->with('message', 'Deparment Deleted Successfully!');
    }
}
