<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title></title>
    <style>
    a:link{
      text-decoration: none;
    }
    </style>
  </head>
  <body>

  <table style="text-align: center">
    <h2>Listado de productos</h2>
    <tr>
      @foreach($productos as $p)
      <th>{{$p->name}}</th>
      @endforeach
    </tr>
    <tr>
      @foreach($productos as $p)
      <td><img src='{{$p->image}}' width="150"></td>
      @endforeach
    </tr>
    <tr>
        @foreach($productos as $p)
          <td><button class="btn btn-success" type="button">Precio {{$p->price}}€</button></td>
        @endforeach
    </tr>
    <tr>
      @foreach($productos as $p)
      <td><a style="color:black" href="{{route('cart-add', $p->name, $p->quantity)}}"><button class="btn btn-warning">Lo quiero</button></a></td>
      @endforeach
    </tr>
    <tr>
      @foreach($productos as $p)
      <td><a style="color:white" href="{{route('product-detail', $p->name)}}"><button class="btn btn-primary">Detalles</button></a></td>
      @endforeach
    </tr>

  </table>

  </body>
</html>
