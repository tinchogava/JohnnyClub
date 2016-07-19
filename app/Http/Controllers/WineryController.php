<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Winery;

class WineryController extends Controller
{
    public function getAll(){
    	return Winery::all();
    }
}
