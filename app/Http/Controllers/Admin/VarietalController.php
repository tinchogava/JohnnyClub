<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Varietal;

class VarietalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $varietals = Varietal::orderBy('id', 'desc')->paginate(5);
       return view('admin.varietal.index', compact('varietals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.varietal.create');
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
            'name' => 'required|unique:varietals|max:255',
            'description' => 'required',
        ]);

        $varietal = Varietal::create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        
        $message = $varietal ? 'Varietal agregado correctamente' : 'El Varietal NO pudo ser agregado';
        
        return redirect()->route('admin.varietal.index')->with('message', $message);    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Varietal $varietal)
    {
        return $varietal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Varietal $varietal)
    {
        return view('admin.varietal.edit', compact('varietal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Varietal $varietal)
    {
        $varietal->fill($request->all());
        $updated = $varietal->save();
        $message = $updated ? 'Varietal actualizada correctamente' : 'El Varietal NO pudo ser actualizado';

        return redirect()->route('admin.varietal.index')->with('message', $message);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Varietal $varietal)
    {
        $deleted = $varietal->delete();
        $message = $deleted ? 'Varietal eliminado correctamente' : 'El Varietal NO pudo ser eliminado';
        
        return redirect()->route('admin.varietal.index')->with('message', $message);    }
}
