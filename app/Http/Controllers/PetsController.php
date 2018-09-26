<?php

namespace App\Http\Controllers;
use App\Noticia;
use App\Mascota;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    //
	public function index () {
		return view('pets.index');
	}
	
    public function about () {
    	return view('pets.about');
    }

    public function photo () {
        $mascotas = Mascota::orderBy('id','desc')->get();
    	return view('pets.photo')->with('mascotas',$mascotas);
    }

    public function adopcion () {
    	return view('pets.adopcion');
    }

    public function voluntario () {
    	return view('pets.voluntario');
    }

    public function noticia () {
        $noticias = Noticia::orderBy('id','desc')->get();
        return view('pets.noticia')->with('noticias',$noticias);
    	
    }

    public function contacto () {
    	return view('pets.contacto');
    }
}
