<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	$products = Product::all();
    	return view('category.index', compact('categories', 'products'));
    }

    public function getAll(){
    	return Category::all();
    }
}
