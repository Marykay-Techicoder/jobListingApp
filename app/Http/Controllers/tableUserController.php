<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class tableUserController extends Controller
{
    public function fetchAndDisplay(Request $request)
    {
        $page = $request->get('page', 1);

        // Fetch data from the API
        $response = Http::get("https://reqres.in/api/users", [
            'page' => $page,
        ]);

        $data = $response->json();
        return view('users', [
            'users' => $data['data'],
            'total_pages' => $data['total_pages'],
            'current_page' => $data['page'],
        ]);
    }

    public function saveToDatabase()
    {
        // Fetch data from both pages
        $pages = [1, 2];
        foreach ($pages as $page) {
            $response = Http::get("https://reqres.in/api/users", [
                'page' => $page,
            ]);

            $data = $response->json();

            // Save each user to the database
            foreach ($data['data'] as $user) {
                Http::updateOrCreate(
                    [
                        'id' => $user['id'],
                        'first_name' => $user['first_name'],
                        'last_name' => $user['last_name'],
                        'email' => $user['email'],
                    ]
                );
            }
        }

        return back()->with('success', 'Users saved to the database successfully.');
    }
}