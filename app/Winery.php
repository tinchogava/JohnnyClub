<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    protected $table = 'wineries';
	protected $fillable = ['name', 'address', 'city_id', 'state_id', 'country_id'];
	public $timestamps = false;

	public function products ()
	{
		return $this->hasMany('App\Product');
	}
	
	public function country()
	{
		return $this->belongsTo('App\Country');
	}

	public function state()
	{
		return $this->belongsTo('App\State');
	}

	public function city() {
		return $this->belongsTo('App\City');
	}
}
