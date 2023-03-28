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
                            'description' => ['required', 'min:10', 'max:1500'],
                        ]);
            dd('Validation passed!');
            return $formData['name'];
}
}