<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $this->getForm($request);
            return view('contact',['name' => $name]);
        }
        
        return view('contact');
    }

    private function getForm()
    {
        $formData = request()->validate([
                            'name' => ['required', 'max:255'],
                            'firstName' => ['required', 'max:255'],
                            'subject' => ['required', 'max:255'],
                            'email' => ['required', 'email', 'max:255'],
                            'description' => ['required', 'min:10', 'max:1500']
                            ],
                            [   
                                'name.required' => 'Please enter your name',    
                                'name.max' => 'Your name should not be more than 255 characters',    
                                'email.required' => 'Please enter your email address',    
                                'email.email' => 'Please enter a valid email address',    
                                'email.max' => 'Your email should not be more than 255 characters',    
                                'description.min' => 'Your description should not be less than 10 characters'
                            ]);
            return $formData['name'];
}
}