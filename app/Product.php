<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['name', 'description', 'size', 'price', 'image', 'visible', 'category_id', 'varietal_id', 'winery_id'];
	public $timestamps = false;

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function winery()
	{
		return $this->belongsTo('App\Winery');
	}

	public function varietal()
	{
		return $this->belongsTo('App\Varietal');
	}

	public function city()
	{
		return $this->belongsTo('App\City');
	}

	public function state()
	{
		return $this->belongsTo('App\State');
	}

	public function country()
	{
		return $this->belongsTo('App\Country');
	}
}
