<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Exception;

use App\Order;

use App\OrderItem;

use App\Http\Controllers\ProductController;

use App\Product;

use MP;

class PayController extends Controller
{
	 public function index()
    {
        //
    }

    public function mercadoPagoCheckout(Request $request)
    {
        $subtotal = 0;
        $stringMP = "";
        $cart = \Session::get('cart');

        foreach($cart as $item){      
            $stringProduct = strval($item->quantity)."\r".$item->name;
            $stringMP = $stringMP." ".$stringProduct." - ";
            $subtotal += $item->price * $item->quantity;
            ProductController::updateRank($item);
        }

        $shipping_address = $request->get('shippingAddress') ? 
        $request->get('shippingAddress') : 
        \Auth::user()->address + "," 
            + \Auth::user()->city->name + ";" 
            + \Auth::user()->state->name + "," 
            + \Auth::user()->country->name;
        $zip_code = $request->get("zipCode") ? $request->get("zipCode") : \Auth::user()->city->zip_code;

        $saveOrder = $this->saveOrder(\Session::get('cart'), $subtotal, $shipping_address, $zip_code);
        $title = 'Orden de compra #'.$saveOrder.' - Johnny Club';
        $preference_data = array(
            "items" => array(
                array(
                    "title" => $title,
                    "quantity" => 1,
                    "currency_id" => "ARS",
                    "unit_price" => $subtotal
                )
            ),
            "back_urls" => array(
                "success" => 'http://localhost:8000/checkout/approvedPayment',
                "pending" => 'http://localhost:8000/checkout/pendingPayment',
                "failure" => 'http://localhost:8000/checkout/failurePayment'
                )
        );
        
        try {
            $preference = MP::create_preference($preference_data);
            return redirect()->to($preference['response']['sandbox_init_point']);
        } catch (Exception $e){
            dd($e->getMessage());
        }
        $this->payByMercadoPago($stringMP, $subtotal);
        
        \Session::forget('cart');
    }
    
    private function saveOrder($cart, $subtotal, $shipping_address, $zip_code)
    {   
        $order = Order::create([
            'subtotal' => $subtotal,
            'shipping_address' => $shipping_address,
            'user_id' => \Auth::user()->id,
            'zip_code' => $zip_code
        ]);
        
        foreach($cart as $item){
            $this->saveOrderItem($item, $order->id);
        }
        return $order->id;
    }
    
    private function saveOrderItem($item, $order_id)
    {
        OrderItem::create([
            'quantity' => $item->quantity,
            'price' => $item->price,
            'product_id' => $item->id,
            'order_id' => $order_id
        ]);
    }
}
