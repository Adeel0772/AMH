<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addappointment;
use App\Models\doctor;
use App\Models\patient;
use App\Mail\TestMail;
use App\Mail\TestMail2;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;



class AddAppointmentController extends Controller
{
    public function create() {
        $doctor=doctor::all();
        return view ("addappointment.create")->with(['doctor'=>$doctor]);
    }
    public function store(Request $request) {
        $addappointment = new addappointment;
        $addappointment->apptype = $request->get('apptype');
        $addappointment->number = $request->get('number');
        $addappointment->date = $request->get('date');
        $addappointment->area = $request->get('area');
        $addappointment->disease = $request->get('disease');
        $addappointment->description = $request->get('description');
        $addappointment->email = $request->get('email');
        $addappointment->doctor_id = $request->get('doctor');
        $addappointment->save();
        
               
        
        // Retrieve the doctor's email address
        $addappointment = Doctor::find($addappointment->doctor_id);
        $doctorEmail = $addappointment->email;
    
        $details = [
            'subject' => 'New Appointment Request',
            'body' => 'Dear Doctor, You have a new appointment. You can check the details of the patient by logging in.
                       If you have any issues with the timing of the date or time of the appointment, kindly let the patient know.
                       In any other case feel free to contact the Hospital staff. '
            
        ];
     
        
        Mail::to($doctorEmail)->send(new \App\Mail\TestMail2($details));

        
        return redirect('addappointment/create')->with('status', 'Type'.$addappointment->apptype.' added Successfully! An email has also been sent');
    }
    
    public function read() {
        $addappointment = addappointment::all();
        return view('addappointment/read')->with(['addappointment' => $addappointment]);
    }
    public function edit($id) { 
        $addappointment = addappointment::find($id); 
        $doctors = Doctor::pluck('name', 'id');
        return view('addappointment/update')->with(['addappointment' => $addappointment,
                                                    'doctor'=>$doctors]);
    }
    public function update(Request $request, $id) {
        $addappointment = addappointment::find($id);
        $addappointment->apptype = $request->get('apptype');
        $addappointment->number = $request->get('number');
        $addappointment->date = $request->get('date');
        $addappointment->area = $request->get('area');
        $addappointment->disease = $request->get('disease');
        $addappointment->email = $request->get('email');
        $addappointment->description = $request->get('description');
        $addappointment->doctor_id = $request->get('doctor');
        $addappointment->save();
        
        return redirect('addappointment/read')->with('status', 'Type'.$id.' updated Successfully!');
    }
    public function delete($id) { 
        addappointment::destroy($id);
        return redirect('addappointment/read')->with('status', 'Type'.$id.' deleted Successfully!');
    }
   

    public function chart() {
        $data = addappointment::select('disease', addappointment::raw('COUNT(disease) as num_diseases'))
        ->where('area', 'wah cantt')
        ->groupBy('disease')
        ->get();
        return view('addappointment.chart', ['data' => $data]);

    }

    public function accept($id)
{
    $addappointment = addappointment::find($id);
    $email = $addappointment->email;

    $details = [
        'subject' => 'Appointment Accepted',
        'body' => 'This is a confirmation email. Your Appointment has been accepted. Make sure to be on time'
    ];

    Mail::to($email)->send(new \App\Mail\TestMail($details));

    return redirect()->back()->with('success', 'Email sent successfully.');

    



       
}


}