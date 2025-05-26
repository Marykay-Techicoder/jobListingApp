<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Recruiter;

class RecruiterController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to dashboard after successful login
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        // Redirect back with an error message if authentication fails
        return back()->withErrors(['login' => 'Invalid credentials'])->withInput();
    }
}