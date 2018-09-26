<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Noticia;
use View;
use Image;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id','desc')->get();;

        return view('admin.noticias.index', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $noticia = new Noticia;
        return view('admin.noticias.create', compact('noticia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();
        $noticia->not_titulo = $request->not_titulo;
        $noticia->not_sub_titulo = $request->not_sub_titulo;
        if(Input::hasFile('not_imagen')) {
            $file=Input::file('not_imagen');
            Image::make($request->file('not_imagen'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/noticias/' . $file->getClientOriginalName());
            $noticia->not_imagen=$file->getClientOriginalName();
        }
        $noticia->not_contenido = $request->not_contenido;

        if($noticia -> save()){
            return redirect("/administracion/noticia")->with('Noticia', 'Noticia agregada correctamente!');
        }else{
            return view("admin.noticia.create", ["noticia" => $noticia]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('noticia.show', ['noticia' => $noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $noticia = Noticia::find($id);
        return view("admin.noticias.edit", compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        $noticia->not_titulo = $request->not_titulo;
        $noticia->not_sub_titulo = $request->not_sub_titulo;
        if(Input::hasFile('not_imagen')) {
            $file=Input::file('not_imagen');
            Image::make($request->file('not_imagen'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/noticias/' . $file->getClientOriginalName());
            $noticia->not_imagen=$file->getClientOriginalName();
        }
        $noticia->not_contenido = $request->not_contenido;

        if($noticia -> save()){
            return redirect("/administracion/noticia")->with('Noticia', 'Noticia editada correctamente!');
        }else{
            return view("admin.noticias.edit", ["noticia" => $noticia]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect("administracion/noticia")->with('Noticia', 'Noticia eliminada correctamente!');
    }
}
