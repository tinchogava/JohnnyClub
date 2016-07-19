<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Varietal;

class VarietalController extends Controller
{
    public function getAll(){
    	return Varietal::all();
    }
}
