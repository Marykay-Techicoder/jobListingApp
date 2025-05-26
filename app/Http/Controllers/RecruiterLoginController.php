<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Recruiter;

class RecruiterLoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('recruiter.recruiter-login');
    }

    // Handle login submission
    public function login(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email is required!',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required!',
            'password.min' => 'Password must be at least 6 characters.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Attempt to log in
        $credentials = $request->only('email', 'password');
        $recruiter = Recruiter::where('email', $request->email)->first();

        if (!$recruiter || !Hash::check($request->password, $recruiter->password)) {
            return back()->withErrors(['login' => 'Invalid email or password!'])->withInput();
        }

        // Store recruiter details in session
        session(['recruiter_id' => $recruiter->id, 'recruiter_name' => $recruiter->company_name]);

        return redirect()->route('dashboard.landing')->with('success', 'Login successful!');
    }
}