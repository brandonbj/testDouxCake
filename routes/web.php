<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::middleware('auth')->group(function (){
    Route::view('/', 'index')->name('index');
    Route::resource('bienvenidos','BienvenidoController');
    Route::resource('conocenos','ConocenosController');
    Route::resource('contactanos','ContactanosController');
    Route::resource('galeria','GaleriaController');
    Route::resource('productos','ProductoController');
    Route::resource('materias','MateriaPrimaController');
    Route::resource('alcaldias','AlcaldiaController');
    Route::resource('ciudades','CiudadController');
    Route::resource('pedido','PedidoController');
    Route::resource('cotizaciones','CotizacionController');
    Route::resource('destinatarios','DestinatarioController');
    Route::resource('imagens','ImagenController');
    Route::resource('promociones','PromocionController');
    Route::resource('proeedors','ProveedorController');
    Route::resource('mpprovedors','MateriaPrimaProveedorController');
    Route::resource('mpproductos','MateriaPrimaProductoController');
    Route::resource('procots','ProductoCotizacionController');
    Route::resource('propros','ProductoPromocionController');
    Route::resource('direntregas','DireccionEntregaController');
    Route::resource('cotusus','CotizacionUsuarioController');
    Route::resource('usuarios','UsuarioController');
    Route::post('add','CarritoController@add');
    Route::post('remove','CarritoController@remove');
    //metodos get
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('payment', array(
        'as' => 'payment',
        'uses' => 'PaypalController@postPayment',
    )); 
    Route::get('payment/status', array(
        'as' => 'payment.status',
        'uses' => 'PaypalController@getPaymentStatus',
    ));
});

