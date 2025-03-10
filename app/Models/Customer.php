<?php

namespace App\Models;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Person
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
}
