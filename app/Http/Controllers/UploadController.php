<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{



    public function showUploadForm()
    {
        return view('upload');
    }

    public function handleFileUpload(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Only allow CSV files
        ]);

        // Open the file and process it
        $file = $request->file('file');
        $filePath = $file->getRealPath();

        // Read the CSV file
        $fileData = array_map('str_getcsv', file($filePath));
        $header = $fileData[0]; // First row should contain column headers
        unset($fileData[0]); // Remove the header row

        // Ensure the CSV file has the correct columns
        $expectedHeaders = ['firstName', 'lastName', 'semester', 'course'];
        if ($header !== $expectedHeaders) {
            return back()->withErrors(['file' => 'Invalid CSV format. Headers do not match.']);
        }

        // Loop through and insert the data into the database
        foreach ($fileData as $row) {
            Record::create([
                'firstName' => $row[0],
                'lastName' => $row[1],
                'semester' => $row[2],
                'course' => $row[3],
            ]);
        }

        return back()->with('success', 'CSV file uploaded successfully!');
    }
}
