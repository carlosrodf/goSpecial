<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
use Request;
use App\Http\Requests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function serveCategory($category){
      //Request::session()->put('listaCarrito',null);
      //Request::session()->put('actuales',0);
      //Request::session()->put('monto',0);

      $title = '';
      if(strcmp($category,'arte-handmade')==0){
        $title = 'HANDMADE';
      }else{
        $title = 'OTROS';
      }

      $productos = \App\Product::where('category',$category)->get();
      return view('welcome')->with('productos',$productos)->with('titulo',$title);
    }

    public function carrito(){
      $title = 'Carrito';
      $collection = Request::session()->get('listaCarrito',collect([]));
      return view('carrito')->with('titulo',$title)
                            ->with('productos',$collection)
                            ->with('actuales',Request::session()->get('actuales',0))
                            ->with('monto',Request::session()->get('monto'),0);
    }

    public function comprar(){
      Request::session()->put('listaCarrito',null);
      Request::session()->put('actuales',0);
      Request::session()->put('monto',0);

      return redirect('/');
    }

    public function agregarAlCarrito($id){
      $actuales = Request::session()->get('actuales',0);
      $collection = null;
      $monto = Request::session()->get('monto',0);

      if($actuales == 0){
        $collection = collect([]);
      }else{
        $collection = Request::session()->get('listaCarrito',null);
      }

      $actuales = $actuales + 1;
      $prod = \App\Product::find($id);
      $collection->push($prod);

      Request::session()->put('listaCarrito',$collection);
      Request::session()->put('actuales',$actuales);
      Request::session()->put('monto',$monto+$prod->price);
      return redirect('/');
    }

}
