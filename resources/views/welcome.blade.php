@extends('masterpage')

@section('titulo-seccion')
  @if (isset($titulo))
    {{$titulo}}
  @endif
@stop

@section('productos')

  @if (isset($productos))
    @foreach ($productos as $producto)
      <div class="col-1-4">
        <div class="wrap-col">
          <a class="example-image-link" href="{{$producto->image}}" data-lightbox="example-set"
            data-title="{{$producto->name}} ${{$producto->price}}">
						<div class="zoom-container" style="height:150px">
							<div class="zoom-caption">
								<div class="caption-inner">
									<div class="caption-inner1">
										<i class="fa fa-eye"></i>
									</div>
								</div>
							</div>
					    <img class="example-image" src="{{$producto->image}}" alt=""/>
					  </div>
            <p>{{$producto->name}}</p>
            <p style="color:gray">${{$producto->price}}
              <a style="background-color:#FF8570; color:white; padding:5px 5px 5px 5px; margin-right:5px;" href="/agregar/{{$producto->id}}">Agregar</a>
            </p>
				  </a>
        </div>
      </div>
    @endforeach
  @endif

@stop
