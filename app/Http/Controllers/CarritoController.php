<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
class CarritoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    # Our function for adding a certain product to the cart
    public function add(Request $r)
    {
        $cartItem = Cart::add($r->all());
        Session::flash('flash_message', 'Producto Agregado');
        return back();
    }
    # Our function for removing a certain product from the cart
    public function remove(Request $r)
    {
        $id =$r->input('id');
        $rows  = Cart::content();
        $rowId = $rows->where('id', $id)->first()->rowId;
        Cart::remove($rowId);
        
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function show(Alcaldia $alcaldia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function edit(Alcaldia $alcaldia)
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
    public function update(Request $request, Alcaldia $alcaldia)
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
