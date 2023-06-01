<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\File;
class AdminController extends Controller
    {
        function login(){
            return view('admin.login');
        }
        function register(){
            return view('admin.register
            ');
        }
        function save(Request $request){
            // Check if there is already an admin user in the database
            $admin = Admin::first();
            if($admin){
                return back()->with('fail','An admin user already exists');
            }else{
                //Validate requests
                $request->validate([
                    'name'=>'required',
                    'email'=>'required|email|unique:admins',
                    'password'=>'required|min:4|max:12'
                ]);
        
                // Check if the provided email matches the specific email for the admin user
                if($request->email != 'iqray331@gmail.com') {
                    return back()->with('fail','This email is not authorized for creating an admin user');
                }
        
                //Insert data into database
                $admin = new Admin;
                $admin->name = $request->name;
                $admin->email = $request->email;
                $admin->password = Hash::make($request->password);
                $save = $admin->save();
        
                if($save){
                    return back()->with('success','Admin has been successfully added to database');
                }else{
                    return back()->with('fail','Something went wrong, try again later');
                }
            }
        }
        
        function check(Request $request){
        //Validate requests
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:4|max:12'
        ]);
        $userInfo = Admin::where('email','=', $request->email)->first();
        if(!$userInfo){
        return back()->with('fail','We do not recognize your email address');
        }else{
        //check password
        if(Hash::check($request->password, $userInfo->password)){
        $request->session()->put('LoggedAdmin', $userInfo->id);
        return redirect('admin/dashboard');
        }else{
        return back()->with('fail','Incorrect password');
        }
        }
        }
        function logout(){
        if(session()->has('LoggedAdmin')){
        session()->pull('LoggedAdmin');
        return redirect('/admin/login');
        }
        }
        function dashboard(){
        $data = ['LoggedAdminInfo'=>Admin::where('id','=', 
        session('LoggedAdmin'))->first()];
        return view('admin.dashboard', $data);
        }
    }
