@extends('masterpage')

@section('area-carrito')
@if ($actuales > 0)
<section class="content-box box-1 box-style-1"><!--Start Box-->
			<div class="zerogrid">
        @foreach ($productos as $producto)
				<div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">
							<h2 class="header"><a href="#">{{$producto->name}}</a></h2>
							<img class="example-image" src="{{$producto->image}}" alt=""/>
							<a href="#" class="button-1">${{$producto->price}}</a>
						</div>
					</div>
				</div>
        @endforeach

        <div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">
							<h2 class="header"><a href="#">Confirmar compra</a></h2>
							<a style="background-color:#FF8570; color:white; padding:5px 5px 5px 5px; margin-right:5px;"
                  href="/realizarCompra" class="button-1">Checkout (${{$monto}})</a>
						</div>
					</div>
				</div>

			</div>
		</section>
@endif
@stop
