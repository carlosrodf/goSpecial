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
      $title = '';
      if(strcmp($category,'arte-handmade')==0){
        $title = 'HANDMADE';
      }else{
        $title = 'OTROS';
      }

      $productos = \App\Product::where('category',$category)->get();
      return view('welcome')->with('productos',$productos)->with('titulo',$title);
    }

    public function agregarAlCarrito($id){
      $actuales = Request::session()->get('actuales',0);
      $actuales = $actuales + 1;
      Request::session()->put('actuales',$actuales);
      return redirect('/');
    }

}
