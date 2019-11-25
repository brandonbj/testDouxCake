<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PedidoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Pedido.mostrarCarrito');
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add= Cart::add([
            'id'=>$request->id,
            'nombre'=>$request->nombre,
            'cantidad'=>$request->cantidad,
            'precio'=>$request->precio,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $alcaldia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $alcaldia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $alcaldia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy( $alcaldia)
    {
        //
    }
}
