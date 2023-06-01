<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddAppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SmsController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('doctor/ourdoctor', function () {
    return view('doctor/ourdoctor');
});

Route::get('addappointment/create', [AddAppointmentController::class, 'create'])->name('addappointment.create');
Route::post('addappointment/store', [AddAppointmentController::class, 'store'])->name('addappointment.store');
Route::get('addappointment/read', [AddAppointmentController::class, 'read'])->name('addappointment.read');
Route::get('addappointment/edit/{id}', [AddAppointmentController::class, 'edit'])->name('addappointment.edit');
Route::post('addappointment/update/{id}', [AddAppointmentController::class, 'update'])->name('addappointment.update');
Route::get('addappointment/delete/{id}', [AddAppointmentController::class, 'delete'])->name('addappointment.delete');
Route::get('addappointment/accept/{id}', [AddAppointmentController::class, 'accept'])->name('addappointment.accept');
Route::get('addappointment/chart', [AddAppointmentController::class, 'chart'])->name('addappointment.chart');
//==========================Patient Auth 
Route::post('/patient/save',[PatientController::class, 'save'])->name('patient.save');
Route::post('/patient/check',[PatientController::class, 'check'])->name('patient.check');
Route::get('/patient/logout',[PatientController::class, 'logout'])->name('patient.logout');
Route::group(['middleware'=>['PatientCheck']], function(){
Route::get('/patient/login',[PatientController::class, 'login'])->name('patient.login');
Route::get('/patient/register',[PatientController::class, 'register'])->name('patient.register');
Route::get('/patient/dashboard',[PatientController::class, 'dashboard']);
});
Route::get('patient/read', [PatientController::class, 'read'])->name('patient.read');
Route::get('patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
Route::post('patient/update/{id}', [PatientController::class, 'update'])->name('patient.update');
Route::get('patient/delete/{id}', [PatientController::class, 'delete'])->name('patient.delete');
//==========================Admin Auth 
Route::post('/admin/save',[AdminController::class, 'save'])->name('admin.save');
Route::post('/admin/check',[AdminController::class, 'check'])->name('admin.check');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');
Route::group(['middleware'=>['AdminCheck']], function(){
Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
});
Route::get('admin/read', [AdminController::class, 'read'])->name('admin.read');
Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
//==========================Doctor Auth 
// Routes================================================
Route::post('/doctor/save',[DoctorController::class, 'save'])->name('doctor.save');
Route::post('/doctor/check',[DoctorController::class, 'check'])->name('doctor.check');
Route::get('/doctor/logout',[DoctorController::class, 'logout'])->name('doctor.logout');
Route::group(['middleware'=>['DoctorCheck']], function(){
Route::get('/doctor/login',[DoctorController::class, 'login'])->name('doctor.login');
Route::get('/doctor/register',[DoctorController::class, 'register'])->name('doctor.register');
Route::get('/doctor/dashboard',[DoctorController::class, 'dashboard']);
});
Route::get('doctor/read', [DoctorController::class, 'read'])->name('doctor.read');
Route::get('doctor/read2', [DoctorController::class, 'read2'])->name('doctor.read2');
Route::get('doctor/read3', [DoctorController::class, 'read3'])->name('doctor.read3');
Route::get('doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
Route::get('doctor/delete/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');
Route::get('doctor/viewdoctor', [DoctorController::class, 'view'])->name('doctor.view');
Route::get('doctor/paramedicstaff', [DoctorController::class, 'read4'])->name('paramedicstaff.view');


Route::get('medicine/create', [MedicineController::class, 'create'])->name('medicine.create');
Route::post('medicine/store', [MedicineController::class, 'store'])->name('medicine.store');
Route::get('medicine/read', [MedicineController::class, 'read'])->name('medicine.read');
Route::get('medicine/read2', [MedicineController::class, 'read2'])->name('medicine.read2');
Route::get('medicine/edit/{id}', [MedicineController::class, 'edit'])->name('medicine.edit');
Route::post('medicine/update/{id}', [MedicineController::class, 'update'])->name('medicine.update');
Route::get('medicine/delete/{id}', [MedicineController::class, 'delete'])->name('medicine.delete');


Route::get('report/create', [ReportController::class, 'create'])->name('report.create');
Route::post('report/store', [ReportController::class, 'store'])->name('report.store');
Route::get('report/read', [ReportController::class, 'read'])->name('report.read');

Route::get('surgery/create', [SurgeryController::class, 'create'])->name('surgery.create');
Route::post('surgery/store', [SurgeryController::class, 'store'])->name('surgery.store');
Route::get('surgery/read', [SurgeryController::class, 'read'])->name('surgery.read');
Route::get('surgery/edit/{id}', [SurgeryController::class, 'edit'])->name('surgery.edit');
Route::post('surgery/update/{id}', [SurgeryController::class, 'update'])->name('surgery.update');
Route::get('surgery/delete/{id}', [SurgeryController::class, 'delete'])->name('surgery.delete');

// Contact
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact/read', [ContactController::class, 'read'])->name('contact.read');

Route::post('/appointments/{id}/accepted', 'AddAppointmentController@accept')->name('appointments.accept');



Route::get('sendsms/create', [SmsController::class, 'show'])->name('sendsms.create');

Route::post('/', 'SmsController@storePhoneNumber');
Route::post('/custom', 'SmsController@sendCustomMessage');



Route::get('report/download/{id}', [ReportController::class, 'download'])->name('report.download');





