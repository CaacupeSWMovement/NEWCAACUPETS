<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Mascota;
use View;
use Image;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mascotas = Mascota::orderBy('id','desc')->get();

        return view('admin.mascotas.index', ['mascotas' => $mascotas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mascota = new Mascota;
        return view('admin.mascotas.create', compact('mascota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mascota = new Mascota();
        $mascota->mas_nombre = $request->mas_nombre;
        $mascota->mas_edad = $request->mas_edad;
        if(Input::hasFile('mas_imagen')) {
            $file=Input::file('mas_imagen');
            Image::make($request->file('mas_imagen'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/mascotas/' . $file->getClientOriginalName());
            $mascota->mas_imagen=$file->getClientOriginalName();
        }
        $mascota->mas_apto = $request->mas_apto;
        $mascota->mas_castrado = $request->mas_castrado;
        $mascota->mas_sexo = $request->mas_sexo;
        $mascota->mas_descripcion = $request->mas_descripcion;

        if($mascota -> save()){
            return redirect("/administracion/mascota")->with('Mascota', 'Mascota agregada correctamente!');
        }else{
            return view("admin.mascota.create", ["mascota" => $mascota]);
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
        //
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
        $mascota = Mascota::find($id);
        return view("admin.mascotas.edit", compact('mascota'));
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
        //
        $mascota = Mascota::find($id);
        $mascota->mas_nombre = $request->mas_nombre;
        $mascota->mas_edad = $request->mas_edad;
        if(Input::hasFile('mas_imagen')) {
            $file=Input::file('mas_imagen');
            Image::make($request->file('mas_imagen'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/mascotas/' . $file->getClientOriginalName());
            $mascota->mas_imagen=$file->getClientOriginalName();
        }
        $mascota->mas_apto = $request->mas_apto;
        $mascota->mas_castrado = $request->mas_castrado;
        $mascota->mas_sexo = $request->mas_sexo;
        $mascota->mas_descripcion = $request->mas_descripcion;

        if($mascota -> save()){
            return redirect("/administracion/mascota")->with('Mascota', 'Mascota editada correctamente!');
        }else{
            return view("admin.mascota.create", ["mascota" => $mascota]);
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
        //
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();
        return redirect("administracion/mascota")->with('Mascota', 'Mascota eliminada correctamente!');
    }
}
