<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function Imageform()
    {
        return view('uploadImage'); // Show the upload form
    }

    public function Image(Request $request)

    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads', $filename);

            return back()->with('success', 'Image uploaded successfully.')->with('path', $path);
        }

        return back()->with('error', 'Failed to upload image.');
    }
}
