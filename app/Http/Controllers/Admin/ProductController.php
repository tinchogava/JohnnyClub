<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Winery;
use App\Varietal;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(5);

        return view('admin.product.index', compact('products', 'categories', 'wineries', 'varietals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'asc')->lists('name', 'id');
        $wineries = Winery::orderBy('id', 'asc')->lists('name', 'id');
        $varietals = Varietal::orderBy('id', 'asc')->lists('name', 'id');

        return view('admin.product.create', compact('categories', 'wineries', 'varietals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductRequest $request)
    {
        $image = $request->file('image') ? \Request::file('image') : null;
        $description_file = $request->file('description_file') ? \Request::file('description_file') : null;
        $visible = $request->get('visible') ? 1 : 0;

        $product = Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'size' => $request->get('size'),
            'price' => $request->get('price'),
            'image' => $image,
            'description_file' => $description_file,
            'visible' => $visible,
            'category_id' => $request->get('category_id'),
            'varietal_id' => $request->get('varietal_id'),
            'winery_id' => $request->get('winery_id')
        ]);
        
        $message = $product ? 'Producto agregado correctamente' : 'El Producto NO pudo ser agregado';
        
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('id', 'asc')->lists('name', 'id');
        $wineries = Winery::orderBy('id', 'asc')->lists('name', 'id');
        $varietals = Varietal::orderBy('id', 'asc')->lists('name', 'id');

        return view('admin.product.edit', compact('product', 'categories', 'wineries', 'varietals'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $product->fill($request->all());

        $name = $request->get('name') == null ? $product->name : $request->get('name');
        $description = $request->get('description') == null ? $product->description : $request->get('description');
        $size = $request->get('size') == null ? $product->size : $request->get('size');    
        $price = $request->get('price') == null ? $product->price : $request->get('price');
        $image = $request->get('image') == "" || null ? 'img/no-image.png' : $request->get('image');
        $visible = $request->get('visible') == null ? 1 : $request->get('visible');
        $category_id = $request->get('category_id') == null ? $product->category_id : $request->get('category_id');
        $varietal_id = $request->get('varietal_id') == null ? $product->varietal_id : $request->get('varietal_id');
        $winery_id = $request->get('winery_id') == null ? $product->winery_id : $request->get('winery_id');
            
            $product->name = $name;
            $product->description = $description;
            $product->size = $size;
            $product->price = $price;
            $product->image = $image;
            $product->visible = $visible;
            $product->category_id = $category_id;
            $product->varietal_id = $varietal_id;
            $product->winery_id = $varietal_id;

            $updated = $product->save();

        $message = $updated ? 'Producto actualizado correctamente' : 'El Producto NO pudo ser actualizado';
        
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();
        $message = $deleted ? 'Producto eliminado correctamente' : 'El Producto NO pudo ser eliminado';
        
        return redirect()->route('admin.product.index')->with('message', $message);    
    }
}
