<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function store(Request $request)
    {
        echo($request->id);
        //return response()->json(['data'=>1], Response::HTTP_CREATED);
    }

}
