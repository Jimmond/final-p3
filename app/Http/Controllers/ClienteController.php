<?php

namespace FinalP3\Http\Controllers;

use Illuminate\Http\Request;
use FinalP3\Client;
use FinalP3\Http\Requests\StoreClientRequest;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes = Client::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Client();

        $cliente->nom_cli = $request->input('nom_cli');
        $cliente->email_cli = $request->input('email_cli');
        $cliente->tel_cli = $request->input('tel_cli');
        $cliente->save();
        return 'SALVADO <a href="/clientes/">Volver</a>';
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
    public function edit(Client $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClientRequest $request, Client $cliente)
    {
      $cliente->fill($request->all());
      $cliente->save();

      return redirect()->route('clientes.index', [$cliente])->with('status','Operacion realizada de manera exitosa');

      //return $cliente;

      //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $cliente)
    {
        $cliente->destroy($cliente->id);
        return redirect()->route('clientes.index');
    }
}
