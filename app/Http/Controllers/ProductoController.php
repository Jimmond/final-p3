<?php

namespace FinalP3\Http\Controllers;

use FinalP3\Producto;
use Illuminate\Http\Request;
use Illuminate\support\facades\Storage;
use finalp3\http\requests\StoreProductosRequest;

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
    public function store(Request $request)
    {
        $producto = new Producto();

        // $producto->id_producto = $request->input('id_producto');
        //$cantidad_roducto = ($request->input('cantidadCaja'))*($request->input('cantidadPorCaja'));
        $producto->nom_prod =           $request->input('nom_prod');
        // $producto->prec_venta_total =   $request->input('prec_venta_total');
        // $producto->prec_venta_unidad =  $request->input('prec_venta_unidad');
        // $producto->prec_compra =        $request->input('prec_compra');
        // $producto->fecha_venc =         $request->input('fecha_venc');
        // $producto->stock =              $request->input('stock');
        $producto->save();

        return 'SALVADO <button href="index" class="btn btn-success">Volver</button>';
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
