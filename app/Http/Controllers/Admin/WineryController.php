<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Winery;
use App\Country;
use App\State;
use App\City;

class WineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = Winery::orderBy('id', 'desc')->paginate(5);
        return view('admin.winery.index', compact('wineries'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('id', 'asc')->lists('name', 'id');
        $states = State::orderBy('id', 'asc')->lists('name', 'id'); 
        $cities = City::orderBy('id', 'asc')->lists('name', 'id');    
   
        return view('admin.winery.create', compact('countries', 'states', 'cities')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:wineries|max:255',
            'address' => 'required|max:400',
            'city_id' => 'required',
            'state_id' => 'required',
            'country_id' => 'required',
        ]);

        $winery = Winery::create([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'city_id' => $request->get('city_id'),
            'state_id' => $request->get('state_id'),
            'country_id' => $request->get('country_id')
        ]);

        $message = $winery ? 'Se creo la bodega '. $request->get('name') : 'No se pudo crear la la Bodega deseada';

        return redirect()->route('admin.winery.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {
        return $winery;  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {
        $countries = Country::orderBy('id', 'asc')->lists('name', 'id');
        $states = State::orderBy('id', 'asc')->lists('name', 'id'); 
        $cities = City::orderBy('id', 'asc')->lists('name', 'id');    
   
        return view('admin.winery.edit', compact('winery', 'countries', 'states', 'cities'));          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winery $winery)
    {
         $winery->fill($request->all());    
         $updated = $winery->save();
         $message = $updated ? 'Se actualizó correctamente' : 'No se pudo actualizar';

         return redirect()->route('admin.winery.index')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery)
    {
        $deleted = $winery->delete();
        $message = $deleted ? 'Bodega eliminada correctamente' : 'La Bodega NO pudo ser eliminada';
        
        return redirect()->route('admin.winery.index')->with('message', $message);
    }
}
