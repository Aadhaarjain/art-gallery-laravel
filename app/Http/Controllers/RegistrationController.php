<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        //
    }

  
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $mobileno = $request->mobileno;
        $email = $request->email;
        $message = $request->message;

        $reg_obj = new registration();
        $reg_obj->name = $name;
        $reg_obj->mobileno = $mobileno;
        $reg_obj->email = $email;
        $reg_obj->message = $message;

        $reg_obj->save();
        
        return redirect('/contact');

    }


    public function show(registration $registration)
    {
        //
    }

 
    public function edit(registration $registration)
    {
        //
    }


    public function update(Request $request, registration $registration)
    {
        //
    }

 
    public function destroy(registration $registration)
    {
        //
    }
}
