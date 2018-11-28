<?php

namespace FinalP3\Http\Controllers;

use finalp3\Producto
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
    {
        return view('productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductosRequest $request)
    {
        $produto = new Producto();

        $produto->id_producto = %request->input('id_producto');
        $produto->nom_prod = %request->input('nom_prod');
        $produto->prec_venta_total = %request->input('prec_venta_total');
        $produto->prec_venta_unidad = %request->input('prec_venta_unidad');
        $produto->prec_compra = %request->input('prec_compra');
        $produto->fecha_venc = %request->input('fecha_venc');
        $produto->stock = %request->input('stock');
        $producto->save();
        
        return 'Saved';
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
