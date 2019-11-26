@extends('base')
@section('title', 'Carrito')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
           <section class="post-content-area single-post-area" style="background-color: transparent;">
              <div class="row">
                <div class="col col-md-12">
            <h3>Lista del carrito</h3>
            <!-- Indica la desición para ver si hay productos en el carrito-->
            @if(Cart::content()->count()!=0)
            <div class="table-responsive">
                <table class="table">
                <tbody>
                    <tr>
                        <th width="40%">Descripción</th>
                        <th width="15%" class="text-center">Cantidad</th>
                        <th width="20%" class="text-center">Precio</th>
                        <th width="20%" class="text-center">Total</th>
                        <th width="5%"  >--</th>
                    </tr>
                    <!--Inicialice for each  -->
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td width="40%"><?php echo  $row->name; ?></td>
                        <td width="15%" class="text-center">{{$row->qty}}</td>
                        <td width="20%" class="text-center">{{$row->price}}</td>
                        <td width="20%" class="text-center">{{$row->total}}</td>
                        <td width="5%">
                           <form action="" method="post">
                           <input type="hidden" id="id" name="id" value="{{$row->id}}">
                           @csrf
                            <button class="btn btn-danger" type="submit">{{__('Eliminar')}}</button>   
                           </form>
                            
                            </td>
                    </tr>
                    <!--End Foreach-->
                    @endforeach
                    <tr>
                        <td colspan="3" align="right"><h3>{{__('Tax')}}</h3> </td>
                        <td align="right"><h3>{{__('$')}} {{Cart::tax()}}</h3> </td>
                        <td> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="3" align="right"><h3>{{__('Total')}}</h3> </td>
                        <td align="right"><h3>{{__('$')}} {{Cart::total()}}</h3> </td>
                        <td> </td>
                    </tr>
                    <!-- Metodo de pago pay pal 
                        <tr>
                            <td colspan="5">
                            <form action="pagar.php" method="post">
                            <div class="alert alert-success" role="alert">
                                <div class="form-group">
                                        <label for="my-input">Correo de contacto:</label>
                                        <input id="email" name="email" 
                                        class="form-control" 
                                        type="email"
                                        placeholder="Por favor ingrese su correo"
                                        required>
                                </div>
                                <small id="emailHelp"
                                class="from-text text"
                                >
                                Los produtos se enviaran a este correo.
                                </small>    
                            </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit" 
                                name="btnAccion"
                                value="proceder"
                                >
                                    Proceder a pagar >>
                                </button>
                            </form>

                            </td>
                        </tr>
                        
                        -->
                </tbody>
                </table>
            </div>
            <!--
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="40%">Descripción</th>
                        <th width="15%" class="text-center">Cantidad</th>
                        <th width="20%" class="text-center">Precio</th>
                        <th width="20%" class="text-center">Total</th>
                        <th width="5%"  >--</th>
                    </tr>
                    
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td width="40%"><?php echo  $row->name; ?></td>
                        <td width="15%" class="text-center">{{$row->qty}}</td>
                        <td width="20%" class="text-center">{{$row->price}}</td>
                        <td width="20%" class="text-center">{{$row->total}}</td>
                        <td width="5%">
                            <a href="">{{__('Eliminar')}}</a>
                            </td>
                    </tr>
                    
                    @endforeach
                    <tr>
                        <td colspan="3" align="right"><h3>{{__('Tax')}}</h3> </td>
                        <td align="right"><h3>{{__('$')}} {{Cart::tax()}}</h3> </td>
                        <td> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="3" align="right"><h3>{{__('Total')}}</h3> </td>
                        <td align="right"><h3>{{__('$')}} {{Cart::total()}}</h3> </td>
                        <td> </td>
                    </tr>

                        <tr>
                            <td colspan="5">
                            <form action="pagar.php" method="post">
                            <div class="alert alert-success" role="alert">
                                <div class="form-group">
                                        <label for="my-input">Correo de contacto:</label>
                                        <input id="email" name="email" 
                                        class="form-control" 
                                        type="email"
                                        placeholder="Por favor ingrese su correo"
                                        required>
                                </div>
                                <small id="emailHelp"
                                class="from-text text"
                                >
                                Los produtos se enviaran a este correo.
                                </small>    
                            </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit" 
                                name="btnAccion"
                                value="proceder"
                                >
                                    Proceder a pagar >>
                                </button>
                            </form>

                            </td>
                        </tr>
                        
                </tbody>
                
            </table>
            -->
            @else
            <!--Aqui comiensa el else  -->
                <br>
                <div class="alert alert-success" role="alert">
                    No hay productos en el carrito...
                </div>
            @endif
                <!--Aquí termina la desición -->
                  </div>
               </div>
            </section>
      </div>
    </div>
  </div>
</section>
@endsection	