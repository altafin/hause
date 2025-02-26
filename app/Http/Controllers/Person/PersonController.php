<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person\Natural;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    public function index()
    {
        $natural = Natural::with(['type', 'documents', 'documents.type'])->find(2);
        dd($natural);

        return view('person.index');
    }

    public function store(Request $request): JsonResponse
    {
        //dd($request);
        return response()->json(['data'=>1], Response::HTTP_CREATED);
    }
}
