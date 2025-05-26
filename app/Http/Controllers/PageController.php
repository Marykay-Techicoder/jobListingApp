<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function checkRestrictions(Request $request)
    {
        // Retrieve user input
        $name = $request->input('name');
        $birthYear = $request->input('birth_year');
        $age = $request->input('age');

        // Age restriction: at least 18 years old
        if ($age < 18) {
            return redirect('/page1'); // Redirect to page1 if under 18
        }

        // Year restriction: born in 1995 or later
        if ($birthYear < 1995) {
            return redirect('/page2'); // Redirect to page2 if born before 1995
        }

        // Name restriction: name must have at least 3 characters
        if (strlen($name) < 3) {
            return redirect('/page3'); // Redirect to page3 if name is too short
        }

        // If none of the restrictions apply, show a success message or redirect as needed
        return redirect('/'); // Or display a success message
    }

    public function form()
    {
        return view('form');  // Page for users under 18
    }
    public function page1()
    {
        return view('page1');  // Page for users under 18
    }

    public function page2()
    {
        return view('page2');  // Page for users born before 1995
    }

    public function page3()
    {
        return view('page3');  // Page for users with short names
    }
}
