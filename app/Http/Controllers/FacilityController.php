<?php

namespace App\Http\Controllers;

use App\Facility;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    function index(){

        $facilities = Facility::all();

        return view('top',['facilities' => $facilities ]);

        }
}
