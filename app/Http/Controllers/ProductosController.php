<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductoRequest;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Producto::search($request->nombre)->orderby('cve_producto', 'ASC')->paginate(5);
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $file = $request->file('imagen');
        $imagen = $request->cve_producto . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/products/';
        $file->move($path, $imagen);
        $producto = new Producto($request->all());
        $producto->imagen = $imagen;
        $producto->save();
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Producto::find($id);
        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Producto::find($id);
        $product->fill($request->all());
        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Producto::find($id);
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
