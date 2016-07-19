<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietal extends Model
{
    protected $table = 'varietals';
	protected $fillable = ['name', 'description'];
	public $timestamps = false;

	public function products()
	{
		return $this->hasMany('App\Product');
	}

}
