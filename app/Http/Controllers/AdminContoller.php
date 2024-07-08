<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminContoller extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor= new doctor;
        $image= $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image= $imagename;
        $doctor->name= $request->name;
        $doctor->phone= $request->number;
        $doctor->room= $request->room;
        $doctor->speciality= $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Dr Added Successfully');

    }

    public function show_appointment()
    {
        $data= Appointment::all();
        return view('admin.show_appointment', compact('data'));
    }

    public function approved($id)
    {
        $data= Appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();
    }
    public function cancel($id)
    {
        $data= Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data= doctor::all();
        return view('admin.showdoctor', compact('data'));
    }
    public function delete_doctor($id)
    {
        $doctor= Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }
    public function update_doctor($id)
    {
        $data= doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    public function edit_doctor(Request $request, $id)
    {
        $doctor= doctor::find($id);
        $doctor->name= $request->name;
        $doctor->phone= $request->phone;
        $doctor->speciality= $request->speciality;
        $doctor->room= $request->room;

        $image= $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image= $imagename;
        $doctor->save();

        return redirect()->back();  

    }
}
