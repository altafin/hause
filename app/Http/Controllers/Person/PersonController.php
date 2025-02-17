<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person\Natural;

class PersonController extends Controller
{
    public function index()
    {
        $natural = Natural::with(['documents', 'documents.type'])->find(2);
        dd($natural);

        return view('person.index');
    }
}
