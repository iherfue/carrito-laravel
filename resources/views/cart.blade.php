<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


    <style type="text/css">

      .table-cart{
        background: #fff;
        border-radius: 1em;
        margin-bottom: 30px;
        padding: 1em;
      }

    </style>
  </head>
  <body>
    <div class="container text-center">
          <h1>Carrito de Compra</h1>
    </div>
<div class="table-cart">
  @if(count($cart))

  <p>
    <a href="{{ route('cart-trash')}}" class="btn btn-danger">Vaciar Carrito</a>
  </p>

    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered">
        @csrf
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Quitar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($cart as $item)
              <tr>
                <td><img src="{{$item->image}}" width="150"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>
                  <input type="number"
                   minlength="1"
                   maxlength="100"
                    value="{{ $item->quantity }}"
                    id="product_{{$item -> id}}"
                  >
                  <a
                  href="#"
                  class="btn btn-warning btn-update-item"
                  data-href="{{ route('cart-update', $item->name) }}"
                   data-id="{{ $item->id}}">Actualizar</a>
                </td>
                <td>{{number_format($item->price * $item->quantity,2)}}€</td>
                <td>
                  <a href="{{ route('cart-delete', $item->name) }}" class="btn btn-danger">
                    x
                  </a>
                </td>
              </tr>
            @endforeach
          </tr>
        </tbody>
      </table><hr>

        <h3 style="float:right">
          <span class="label label-success">Total: {{ number_format($total,2)}} €</span>
        </h3>
    </div>
    @else
      <h3><span class="label label-warning">No hay productos en la cesta</span></h3>
    @endif
    <hr>
    <p style="float:right">
      <a href="{{ route('home') }}" class="btn btn-primary">Seguir Comprando</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Continuar</a>
    </p>
</div>
  <script src="{{url('/js/main.js')}}" type="text/javascript"></script>
  </body>
</html>
