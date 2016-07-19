<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';
    protected $fillable = ['name', 'zip_code', 'state_id'];

	public function state()
	{
		return $this->belongsTo('App\State');
	}

	public function city() {
		return $this->belongsTo('App\City');
	}
}
