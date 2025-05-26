<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show()
    {
        $authors = Author::with('readers')->get();
        return view('author', compact('authors'));
    }
}
