<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        if ($request->isMethod('post')) {
            $formData = $this->formToDB();
            $name = $formData['name'];
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
            return $formData;
    }

    private function formToDB()
    {
        $formData = $this->getForm();
        $ticket = new Ticket();

        $ticket->first_name = $formData['firstName'];
        $ticket->last_name = $formData['name'];
        $ticket->email = $formData['email'];
        $ticket->subject = $formData['subject'];
        $ticket->description = $formData['description'];
        $ticket->save();

        return $formData;
    }
}