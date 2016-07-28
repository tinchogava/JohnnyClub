<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['name', 'description', 'size', 'price', 'image', 'visible', 'category_id', 'varietal_id', 'winery_id', 'description_file', 'ranked'];
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

	public function setImageAttribute($image){

	    if($image == null){
	        		$this->attributes['image']= 'img/no-image.png';
	        		return redirect()->route('admin.product.index')->with('message', 'Producto agregado sin Imagen');
	        	} else {

		        	$mime = $image->getMimeType();
				    $extension = strtolower($image->getClientOriginalExtension());
				    $fileName = uniqid().'.'.$extension;

				    switch ($mime)
				    {
				        case "image/jpeg":
				        case "image/png":
				        case "image/gif":

				            if ($image->isValid())
				            {
								\Storage::disk('image')->put($fileName, \File::get($image));
								$this->attributes['image'] = 'img/products/'.$fileName;
							}
							break;
				        default:
				            return redirect()->route('admin.product.index')->with('error-message', 'Archivo NO Válido');
				    }
				}
	}

	public function setDescriptionFileAttribute($description_file){

	    if($description_file == null){
	        		$this->attributes['description_file']= '';
	        		return redirect()->route('admin.product.index')->with('message', 'Producto agregado sin Cartilla');
	        	} else {

		        	$mime = $description_file->getMimeType();
				    $extension = strtolower($description_file->getClientOriginalExtension());
				    $fileName = uniqid().'.'.$extension;

				    switch ($mime)
				    {
				        case "application/pdf":

				            if ($description_file->isValid())
				            {
								\Storage::disk('pdf')->put($fileName, \File::get($description_file));
								$this->attributes['description_file'] = 'pdf/products/'.$fileName;
							}
							break;
				        default:
				            return redirect()->route('admin.product.index')->with('error-message', 'Archivo NO Válido');
				    }
				}
	}
}