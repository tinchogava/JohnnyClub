<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}
    // Show cart
    public function show()
    {
  	$cart = \Session::get('cart');
    $cartCount = $this->cartCount();
    $total = $this->total();
    	return view('store.cart', compact('cart', 'cartCount' ,'total'));
    }
    // Add item
    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
    	$product->quantity = 1;
    	$cart[$product->id] = $product;
    	\Session::put('cart', $cart);
        $message = $product ? 'Se agregó '. $product->name .' al carrito' : 'No se pudo agregar ' . $product->name . 'al carrito';
    	return redirect()->route('cart-show')->with('message', $message);
    }
    //Remove item
    public function remove(Product $product)
    {
    	$cart = \Session::get('cart');
    	unset($cart[$product->id]);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');

    }
    //Update item
    public function update(Product $product, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->id]->quantity = $quantity;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    //Trash cart
    public function trash()
    {
    	\Session::forget('cart');
    	return redirect()->route('cart-show');
    }

    public static function cartCount(){
        $cartCount = 0;
        if(\Session::has('cart')){
           $cart = \Session::get('cart');
            foreach ($cart as $item) {
                $cartCount += $item->quantity;
            }
        }
        return $cartCount;
    }

    //Total
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->price * $item->quantity;
        }
        return $total;
    }

    public function orderDetail(){
        if(count(\Session::has('cart')) <= 0) return redirect()->route('home'); 
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.order-detail', compact('cart', 'total'));
    }

}
