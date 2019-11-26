<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
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
        $pedido=Pedido::all();
        return view ('Pedido.mostrarCarrito',$pedido);
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
        
    }
     public function delete(Request $r)
    {
        Cart::remove($request->id);
        redirect('/pedido');
    }

    public function getitem(Request $request){
        Cart::add($request->id,$request->name,$request->price,$request->qty);
        redirect('/galeria');
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
    public function destroy(Request $r)
    {
        Cart::remove($request->id);
        redirect('/pedido');
    }
}
