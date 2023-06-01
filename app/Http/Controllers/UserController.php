<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'disease' => 'required'
        ]);

        // Store the form data in the database or perform other actions
        // You can access the form data using $request->input('field_name')
        // For example:
        $name = $request->input('name');
        $city = $request->input('city');
        $disease = $request->input('disease');

        // Perform further actions, such as storing the data in the database

        // Redirect to a thank you page or return a response
        return view('thankyou');
    }
}
