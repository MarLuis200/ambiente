<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;
use Session;
use Redirect;
use App\Http\Requests\CreateTipos;
use App\Http\Requests\UpdateTipos;

class TiposController extends Controller
{
    public function index()
    {
        $tipo_publicacion = Tipos::all();
        return view('admin.tipo_publicacion.index', compact('tipo_publicacion'));
    }

    public function crear()
    {
        return view('admin.tipo_publicacion.crear');
    }

    public function store(CreateTipos $request)
    {
        $tipo_publicacion = new Tipos;
        $tipo_publicacion->desc_tipos = $request->desc_tipos;
        $tipo_publicacion->save();

        return redirect('admin/tipo_publicacion')->with('message', 'Guardado Satisfactoriamente!');
    }

    public function show($id)
    {
        $tipo_publicacion = Tipos::findOrFail($id);
        return view('admin.tipo_publicacion.detalles', compact('tipo_publicacion'));
    }

    public function actualizar($id)
    {
        $tipo_publicacion = Tipos::findOrFail($id);
        return view('admin.tipo_publicacion.actualizar', ['tipo_publicacion' => $tipo_publicacion]);
    }

    public function update(UpdateTipos $request, $id)
    {
        $tipo_publicacion= Tipos::findOrFail($id);
        $tipo_publicacion->desc_tipos = $request->desc_tipos;
        $tipo_publicacion->save();

        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/tipo_publicacion');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $tipo_publicacion = Tipos::findOrFail($id);
        $tipo_publicacion->delete();

        Session::flash('message', 'Eliminado Satisfactoriamente!');
        return Redirect::to('admin/tipo_publicacion');
    }
}
