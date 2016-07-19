<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
	protected $table = 'order_items';
	protected $fillable = ['quantity', 'product_id', 'order_id'];
    public $timestamps = false;
    
    public function order()
    {
    	return $this->belongTo('App\Order');
    }
}
