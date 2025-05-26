<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http as HttpClient;
use App\Models\Http;

class HttpController extends Controller
{
    public function index()
    {
        // Fetch data from the API
        $page1 = HttpClient::get('https://reqres.in/api/users?page=1')->json();
        $page2 = HttpClient::get('https://reqres.in/api/users?page=2')->json();

        // Combine data from both pages
        $users = array_merge($page1['data'], $page2['data']);

        // Pass the data to the view
        return view('http.index', compact('users'));
    }

    public function save()
    {
        // Fetch data from the API
        $page1 = HttpClient::get('https://reqres.in/api/users?page=1')->json();
        $page2 = HttpClient::get('https://reqres.in/api/users?page=2')->json();

        // Combine data from both pages
        $users = array_merge($page1['data'], $page2['data']);

        // Save the data to the database
        foreach ($users as $user) {
            Http::updateOrCreate(
                ['email' => $user['email']], // Unique constraint
                [
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'avatar' => $user['avatar'],
                ]
            );
        }

        return redirect()->route('http.index')->with('success', 'Data saved to the database successfully.');
    }
}