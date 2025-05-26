<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csrf extends Model
{
    use HasFactory;
//this is the mathe assignmrnt operator to specoify whaat details the user should fill

    protected $fillable =[
            'Firstname',
            'Lastname',
            'othername',
            'Address',
    ]}

    //protected $guarded = [''];
    //thsi is tin specify that user should fill all te forms by default