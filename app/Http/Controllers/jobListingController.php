<?php

namespace App\Http\Controllers;

use validation;
use App\Models\csrf;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;

class jobListingController extends Controller
{
  public function home()
  {
    return view('home');
  }
  public function job1()
  {
    return view('job1');
  }
  public function job2()
  {
    return view('job2');
  }
  public function job3()
  {
    return view('job3');
  }
  public function job4()
  {
    return view('job4');
  }

  public function csrf()
  {
    return view('csrf');
  }

  public function csrfPage(Request $request)
  {
    $Validation = $request->validate([
      "Firstname" => "required|min:3 |max:12",
      "Lastname" => "required",
      "othername" => "required",
      "Address" => "required",
      "email" => "email|unqiue",
    ]);
    if ($Validation) {
      $students = new csrf;
      $students->Firstname = $request->Firstname;
      $students->Lastname = $request->Lastname;
      $students->othername = $request->othername;
      $students->Address = $request->Address;
      $students->save();
      //$data = $request->all();
      //dd($data);
    }
  }
}