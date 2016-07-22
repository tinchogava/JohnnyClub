<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Response;

class ProductController extends Controller
{
    public function index()
    {
		$products = Product::all();
	   	return view('product.index', compact('products'));
   }

   public function detail($id){
		$product = Product::where('id', $id)->first();
		return \View::make('product.detail')->with('product', $product);
	}

	public function viewPrimer($product){
		return response()->file($product->description_file);
	}

	public static function updateRank(Product $product){
        $rank = $product->ranked + 1;
        Product::where('id', $product->id)
                ->update(['ranked' => $rank]);
    }
}
