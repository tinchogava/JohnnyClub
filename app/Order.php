<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
	protected $fillable = ['subtotal', 'shipping_address', 'user_id'];
    public $timestamps = false;
    
    public function orderItems()
    {
    	return $this->hasMany('App\OrderItem');
    }
}
