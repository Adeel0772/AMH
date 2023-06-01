<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surgery;
use App\Models\patient;
use App\Models\doctor;
use Twilio\Rest\Client;
class SurgeryController extends Controller
{
    public function create() {
        $patients = patient::all();
        $doctors = doctor::all(); 
        return view ("surgery.create")->with(['patient' => $patients])->with(['doctor' => $doctors]);
    }
    public function store(Request $request) {
        $surgery = new surgery;
        $surgery->sertype = $request->get('sertype');
        $surgery->description = $request->get('description');
        $surgery->date = $request->get('date');
        $surgery->time = $request->get('time');
        $surgery->room = $request->get('room');
        $surgery->patient_id = $request->get('patient');
        $surgery->doctor_id = $request->get('doctor');
        $surgery->save();
        
    
        return redirect('surgery/create')->with('status', 'Type'.$surgery->medtype.' added Successfully!');
    }
    public function read() {
        $surgery = surgery::all();
        return view('surgery/read')->with(['surgery' => $surgery]);
    }
    public function edit($id) { 
        $surgery = surgery::find($id);
        $patients = patient::all(); 
        $doctors = doctor::all(); 
        return view('surgery/update')->with(['surgery' => $surgery])->with(['patient' => $patients])->with(['doctor' => $doctors]);
    }
    public function update(Request $request, $id) {
        $surgery = surgery::find($id);
        $surgery->sertype = $request->get('sertype');
        $surgery->description = $request->get('description');
        $surgery->date = $request->get('date');
        $surgery->time = $request->get('time');
        $surgery->room = $request->get('room');
        $surgery->patient_id = $request->get('patient');
        $surgery->doctor_id = $request->get('doctor');
        $surgery->save();
        return redirect('surgery/read')->with('status', 'Type'.$id.' updated Successfully!');
    }
    public function delete($id) { 
        $surgery = surgery::find($id);
        $surgery->delete();
        return redirect('surgery/read')->with('status', 'Type'.$id.' deleted Successfully!');
    }
}
