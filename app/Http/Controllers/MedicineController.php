<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine;

class MedicineController extends Controller
{
    public function create() {
        return view ("medicine.create");
    }
    public function store(Request $request) {
        $medicine = new medicine;
        $medicine->name = $request->get('name');
        $medicine->medtype = $request->get('medtype');
        $medicine->date = $request->get('date');
        $medicine->description = $request->get('description');
        $medicine->save();
        return redirect('medicine/create')->with('status', 'Type'.$medicine->medtype.' added Successfully!');
    }
    public function read() {
        $medicine = medicine::all();
        return view('medicine/read')->with(['medicine' => $medicine]);
    }
    public function read2() {
        $medicine = medicine::all();
        return view('medicine/read2')->with(['medicine' => $medicine]);
    }
    public function edit($id) { 
        $medicine = medicine::find($id);
        return view('medicine/update')->with(['medicine' => $medicine]);
    }
    public function update(Request $request, $id) {
        $medicine = medicine::find($id);
        $medicine->name = $request->get('name');
        $medicine->medtype = $request->get('medtype');
        $medicine->date = $request->get('date');
        $medicine->description = $request->get('description');
        $medicine->save();
        return redirect('medicine/read')->with('status', 'Type'.$id.' updated Successfully!');
    }
    public function delete($id) { 
        $medicine = medicine::find($id);
        $medicine->delete();
        return redirect('medicine/read')->with('status', 'Type'.$id.' deleted Successfully!');
    }
       
}
