<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use App\Models\Publicaciones;
use App\Models\Tipos;
use Session;
use Redirect;
use App\Http\Requests\CreatePublicaciones;
use App\Http\Requests\UpdatePublicaciones;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime;

class PublicacionesController extends Controller
{
    public function index()
{
    $publicaciones = Publicaciones::with('tipo', 'persona')->get();
    $tipos = Tipos::all();
    $personas = Personas::all();
    return view('admin.publicaciones.index', compact('publicaciones', 'tipos', 'personas'));
}


    public function crear()
    {
        $publicaciones = Publicaciones::all(); // Obtén las publicaciones si es necesario
        return view('admin.publicaciones.crear', compact('publicaciones'));
    }


    public function store(CreatePublicaciones $request)
    {
        $publicaciones = new Publicaciones;
        $publicaciones->titulo = $request->titulo;
        $publicaciones->descripcion = $request->descripcion;
        $publicaciones->fecha_creacion = $request->fecha_creacion;
        $publicaciones->id_tipo = $request->id_tipo;
        $publicaciones->id_persona = $request->id_persona;
        $publicaciones->contenido = $request->contenido;
        if ($request->hasFile('img')) {
            $publicaciones->img = $request->file('img')->store('/');
        }

        $publicaciones->created_at = now();
        $publicaciones->save();

        return redirect('admin/publicaciones')->with('message', 'Guardado Satisfactoriamente!');
    }

    public function show($id)
    {
        $publicaciones = Publicaciones::findOrFail($id);
        $tipos = Tipos::all();
        $personas = Personas::all();
        return view('admin.publicaciones.detalles', compact('publicaciones', 'tipos', 'personas'));
    }

    public function showPublicaciones($id)
    {
        $publicaciones = Publicaciones::findOrFail($id);
        return view('admin.publicaciones.vista', compact('publicaciones'));
    }

    public function actualizar($id)
    {
        $publicaciones = Publicaciones::findOrFail($id);
        $tipos = Tipos::all();
        $personas = Personas::all();
        return view('admin.publicaciones.actualizar', compact('tipos', 'personas', 'publicaciones'));
    }

    public function update(UpdatePublicaciones $request, $id)
    {
        $publicaciones = Publicaciones::findOrFail($id);
        $publicaciones->titulo = $request->titulo;
        $publicaciones->descripcion = $request->descripcion;
        $publicaciones->fecha_creacion = $request->fecha_creacion;
        $publicaciones->id_tipo = $request->id_tipo;
        $publicaciones->id_persona = $request->id_persona;
        $publicaciones->contenido = $request->contenido;

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $publicaciones->img = $request->file('img')->store('/');
        }

        // Guardamos la fecha de actualización del registro
        $publicaciones->updated_at = now();

        // Actualizo los datos en la tabla 'publicaciones'
        $publicaciones->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/publicaciones');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $publicaciones = Publicaciones::findOrFail($id);

        // Elimino la imagen de la carpeta 'uploads'
        if ($publicaciones->img) {
            $imagen = explode(",", $publicaciones->img);
            Storage::delete($imagen);
        }

        // Elimino el registro de la tabla 'publicaciones'
        $publicaciones->delete();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente!');
        return Redirect::to('admin/publicaciones');
    }

    public function vista($id)
    {
        $publicaciones = Publicaciones::findOrFail($id);
        return view('publicaciones.vista', compact('publicaciones'));
    }
}
