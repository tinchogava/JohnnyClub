<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\Http\Controllers\CartController;

class StoreController extends Controller
{
	public function index(){
		$products = Product::where('visible', 1)
							->orderBy('ranked', 'desc')
							->take(8)
							->get();
	   	return view('store.index', compact('products', 'providerUser'));
	}

	public function show($id){
		$product = Product::where('id', $id)->first();
		return view('product.show', compact('product'));
	}

}
