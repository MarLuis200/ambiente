<?php
namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Tipos;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }


    public function blogs()
    {
        $tipoBlog = Tipos::where('desc_tipos', 'blog')->first();

        if ($tipoBlog)
        {
            $blogs = Productos::where('id_tipo', $tipoBlog->id)->get();
        } else
        {
            $blogs = [];
        }
        return view('landing.blogs', compact('blogs'));
    }

    public function proyectos()
    {
        $tipoProyecto = Tipos::where('desc_tipos', 'proyecto')->first();

        if ($tipoProyecto)
        {
            $proyectos = Productos::where('id_tipo', $tipoProyecto->id)->get();
        } else
        {
            $proyectos = [];
        }
        return view('landing.proyectos', compact('proyectos'));
    }


    public function galeria()
    {
        return view('landing.galeria');
    }

    public function acerca()
    {
        return view('landing.acerca');
    }

    public function quienesSomos()
    {
        return view('landing.quienes-somos');
    }

    public function premios()
    {
        return view('landing.premios');
    }

    public function donaciones()
    {
        return view('landing.donaciones');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
