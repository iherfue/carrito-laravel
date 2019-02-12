<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container text-center">
      <div class="page-header">
        <h1>Detalle del producto</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="product-block">
            <h3>{{$p->name}}</h3><hr>
            <div class="product-info panel">
              <p>{{$p->description}}</p>
              <h3>
                <span class="label label-success">Precio: {{$p->price}}</span>
              </h3>
              <p>
                <a class="btn btn-warning btn-block" href="{{ route('cart-add', $p->name)}}">
                  La quiero
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
