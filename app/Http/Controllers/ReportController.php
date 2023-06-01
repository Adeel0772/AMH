<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\report;
class ReportController extends Controller
{
    public function create() {
        return view ("report.create");
    }
    public function store(Request $request) {
        $report = new report;
        $report->name = $request->input('name');
        $report->labid = $request->input('labid');
        $report->email = $request->input('email');
        $report->testType = $request->input('testType');
        $report->testResults = $request->input('testResults');
        $report->description = $request->input('description');
        $report->save();
        
        $credentials = [
            'labid' => $request->input('labid'),
            'name' => $request->input('name'),
            'testtype' => $request->input('testType'),
            'testresults' => $request->input('testResults'),
            'description' => $request->input('description')
        ];
    
        $details = [
            'subject' => 'Test Report Confirmation',
            'body' => 'Dear ' . $credentials['name'] . 'LABID:'  . ($credentials['labid'] ). ' test results are now available. Please login to our website"http://127.0.0.1:8000/report/read" to view your results.\n\nThank you,\nThe Testing Center'
        ];
    
        Mail::to($report->email)->send(new TestMail($details));
    
        return redirect('report/create')->with('status', 'Type '.$report->testType.' added successfully!'); 
    }
    
    
    // public function read() {
    //     $report = report::all();
    //     return view('report/read')->with(['report' => $report]);
    // }
    public function read(Request $request) {
        $name = $request->query('name');
    
        if ($name) {
            $report = report::where('name', $name)->get();
        } else {
            $report = report::all();
        }
    
        return view('report.read')->with(['report' => $report]);
    }
    public function download($id)
{
    $report = report::find($id);

    if (!$report) {
        abort(404);
    }

    $html = view('report.download')->with(['report' => $report])->render();

    return response($html)
        ->header('Content-Disposition', 'attachment; filename="report.html"')
        ->header('Content-Type', 'text/html');
}

    
}
