<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function idioma(){

      $idioma = \Request::cookie('idioma', 'es');

      return view('personalizacion.idioma', ['idioma' => $idioma]);
    }

    public function guardaIdioma(Request $request){

       $this->validate($request, ['idioma' => 'required']);

       return redirect('/idioma')->withCookie(cookie('idioma', $request->input('idioma'), 60 * 24 * 365));
     }
}
