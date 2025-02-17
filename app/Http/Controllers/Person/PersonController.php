<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person\Natural;

class PersonController extends Controller
{
    public function index()
    {
        $natural = Natural::with(['documents'])->find(2);
        $document1 = $natural->documents[0];
        $document1->load('type');
        dd($document1);

        return view('person.index');
    }
}
