<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

/*
 *
 * Add functions to return the view of a specific rout
 *
 * */

class RoutingController extends Controller
{
    public function getPlantilla(){
        return view('connect.plantilla');
    }

    public function getExample(){
        return view('example');
    }
}
