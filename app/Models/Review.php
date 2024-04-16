<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// class Review extends Model
// {
//     use HasFactory;
// }

class Review extends Model
{
    protected $fillable = ['name', 'email', 'review'];
}


