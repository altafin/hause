<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person\NaturalPerson;
use Illuminate\Http\Request;

class NaturalPersonController extends Controller
{
    public function create()
    {
        return view('admin.person.natural.create');
    }
    public function store(Request $request)
    {
        $naturalPerson = new NaturalPerson();
        $naturalPerson->name = 'Teste';
        $naturalPerson->cnpj = '1234567890';

        dd($naturalPerson);
    }

}
