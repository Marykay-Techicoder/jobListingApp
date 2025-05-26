<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class userController extends Controller
{
    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:225',
            'last_name' => 'required|string|max:225',
            'address' => 'required|string',
            'student_id' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'dob' => 'required|date',
            'favorite_color' => 'required|string',
            'semester' => 'required|string',
        ]);

        try {
            Log::info('Request Data:', $request->all());

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'student_id' => $request->student_id,
                'email' => $request->email,
                'dob' => $request->dob,
                'favorite_color' => $request->favorite_color,
                'semester' => $request->semester,
            ]);
            Log::info('User Created:', ['user' => $user]);
            return redirect()->route('users.create')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            Log::error('Error in storing user:', ['error' => $e->getMessage()]);
            return redirect()->route('users.create')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function index()
    {
        $users = User::all();
        return view('list-users', compact('users'));
    }
}