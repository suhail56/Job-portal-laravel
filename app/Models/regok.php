<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regok extends Model
{
    protected $fillable=['fname','lname','email','gender','password'];
}
