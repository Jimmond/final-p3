<?php

namespace FinalP3\Http\Controllers;

use FinalP3\Producto;
use Illuminate\Http\Request;
use Illuminate\support\facades\Storage;
use FinalP3\Http\Requests\StoreProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

         return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {

        $producto = new Producto();

  
        $cantidad_roducto = ($request->input('cantidadCaja'))*($request->input('cantidadPorCaja'));
        $producto->nom_prod =           $request->input('nom_prod');
        $producto->prec_venta_total =   $request->input('prec_venta_total');
        $producto->prec_venta_unidad =  $request->input('prec_venta_unidad');
        $producto->prec_compra =        $request->input('prec_compra');
        $producto->fecha_venc =         $request->input('fecha_venc');
        $producto->stock =              $cantidad_roducto;
        $producto->save();

        return 'SALVADO <a href="/productos/" class="btn btn-success" style="outline:green; color:white; background-color:black; padding:10px; border-radius:5px;">Volver</a>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoRequest $request, Producto $producto)
    {
        $producto->fill($request->all());
        $producto->save();
        return redirect()->route('productos.show', [$producto])->with('status','Operacion realizada de manera exitosa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->destroy($producto->id);
          return redirect()->route('productos.index');
    }
}
