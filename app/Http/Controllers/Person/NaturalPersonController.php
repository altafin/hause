<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person\Natural;
use Illuminate\Http\Request;

class NaturalPersonController extends Controller
{
    public function create()
    {
        return view('admin.person.natural.create');
    }
    public function store(Request $request)
    {
        $naturalPerson = new Natural();
        $naturalPerson->name = 'Teste';
        $naturalPerson->cnpj = '1234567890';

        dd($naturalPerson);
    }

}
