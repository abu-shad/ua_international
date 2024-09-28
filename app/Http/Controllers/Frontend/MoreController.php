<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Help;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MoreController extends Controller
{
    public function helpDesk(){
        return view('frontend.more.help');
    }

    public function termsConditions(){
        return view('frontend.more.terms');
    }

    public function privacyPolicy(){
        return view('frontend.more.privacy');
    }

    public function helpDeskCreate (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // $contact = [
        //     'name' => $request->name ?? 'N/A',
        //     'address' => $request->address ?? 'N/A',
        //     'email' => $request->email ?? 'N/A',
        //     'phone' => $request->phone ?? 'N/A',
        //     'message' => $request->message ?? 'N/A'
        // ];
        
        // Mail::to('bdm@uainternational.in')->send(new \App\Mail\EmployerMail($contact));
        Help::create($validatedData);
        return redirect()->back()->with('success', 'Query Submitted successfully.');
    }
}
