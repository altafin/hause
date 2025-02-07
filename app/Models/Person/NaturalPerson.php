<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Model;

class NaturalPerson extends Person
{
    protected $fillable = [
        'name',
        'cpf',
        'birthday',
    ];
}
