<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\patient;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function read()
    {
        $patient=patient::all();
        return view('patient/read')->with(['patient' => $patient]);
    }
    public function edit($id)
    {
        $patient=patient::find($id);
        return view('patient/update')->with(['patient' => $patient]);
    }
    public function update(Request $request, $id)
    {
        $patient=patient::find($id);
        $patient->name = $request->name;
        $patient->gender = $request->gender;
        $patient->dob = $request->dob;
        $patient->age = $request->age;
        $patient->sickness = $request->sickness;
        $patient->save();
       return redirect('patient/read');
    }
    public function delete($id)
    {
        patient::destroy($id);
        return redirect('patient/read');
    }
    function login(){
        return view('patient.login');
    }
    function register(){
        return view('patient.register');
    }
    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:patients',
            'password'=>'required|min:4|max:12'
        ]);
        $patient = new patient;
        $patient->name = $request->name;
        $patient->gender = $request->gender;
        $patient->dob = $request->dob;
        $patient->age = $request->age;
        $patient->sickness = $request->sickness;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $save = $patient->save();
        if($save){
            return back()->with('success','New Patient has been successfuly added');
        }
        else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function check(Request $request){
        //Validate requests
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:4|max:12'
        ]);
        $patientInfo = patient::where('email','=', $request->email)->first();
        if(!$patientInfo){
            return back()->with('fail','We do not recognize your email address');
        }
        else{
            //check password
            if(Hash::check($request->password, $patientInfo->password)){
            $request->session()->put('LoggedPatient', $patientInfo->id);
            return redirect('patient/dashboard');
        }
        else{
            return back()->with('fail','Incorrect password');
        }
        }
    }
    function logout(){
        if(session()->has('LoggedPatient')){
            session()->pull('LoggedPatient');
            return redirect('/patient/login');
        }
    }
    function dashboard(){
        $data = ['LoggedpatientInfo'=>patient::where('id','=', session('LoggedPatient'))->first()];
        return view('patient.dashboard', $data);
    }

}
