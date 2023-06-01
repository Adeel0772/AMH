<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\doctor;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    
    public function read()
    {
        $doctor=doctor::all();
        return view('doctor/read')->with(['doctor' => $doctor]);
    
    }
    public function read2() {
        $doctor = doctor::all();
        return view('doctor/read2')->with(['doctor' => $doctor]);
    }
    public function read3() {
        $doctor = doctor::all();
        return view('doctor/read3')->with(['doctor' => $doctor]);
    }
    public function read4()
    {
        
        return view('doctor/paramedicstaff');
    
    }


    public function edit($id)
    {
        $doctor=doctor::find($id);
        return view('doctor/update')->with(['doctor' => $doctor]);
    }
    public function update(Request $request, $id)
    {
        $doctor=doctor::find($id);
        $doctor->name = $request->name;
        $doctor->gender = $request->gender;
        $doctor->exp = $request->exp;
        $doctor->timings = $request->timings;
        $doctor->save();
       return redirect('doctor/read');
    }
    public function delete($id)
    {
        doctor::destroy($id);
        return redirect('doctor/read');
    }
    function login(){
        return view('doctor.login');
    }
    function register(){
        return view('doctor.register');
    
    }
    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:doctors',
            'password'=>'required|min:4|max:12'
           
        ]);
        $doctor = new doctor;
        $doctor->name = $request->name;
        $doctor->gender = $request->gender;
        $doctor->exp = $request->exp;
        $doctor->timings = $request->timings;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $save = $doctor->save();
        if($save){
            return redirect('doctor/dashboard')->with('success','New Doctor has been successfuly added');
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
        $doctorInfo = doctor::where('email','=', $request->email)->first();
        if(!$doctorInfo){
            return back()->with('fail','We do not recognize your email address');
        }
        else{
            //check password
            if(Hash::check($request->password, $doctorInfo->password)){
            $request->session()->put('LoggedDoctor', $doctorInfo->id);
            return redirect('doctor/dashboard');
        }
        else{
            return back()->with('fail','Incorrect password');
        }
        }
    }
    function logout(){
        if(session()->has('LoggedDoctor')){
            session()->pull('LoggedDoctor');
            return redirect('/doctor/login');
        }
    }
    function dashboard(){
        $data = ['LoggeddoctorInfo'=>doctor::where('id','=', session('LoggedDoctor'))->first()];
        return view('doctor.dashboard', $data);
    }

}
