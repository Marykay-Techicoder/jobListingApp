<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'description',
    ];
    public function books()
    {
        return $this->hasMany(Reader::class);
    }
}