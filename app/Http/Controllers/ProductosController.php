<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductos;
use App\Http\Requests\UpdateProductos;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime;

class ProductosController extends Controller
{

    public function index()
    {
        $tipos = Tipos::all();
        $productos = Productos::join("tipos", "tipos.id", "=", "productos.id_tipo")
            ->select("productos.*", "tipos.desc_tipos")
            ->get();

        return view('admin.productos.index', compact('productos','tipos'));
    }


    // Crear un Registro (Create)
    public function crear()
    {
        $productos = Productos::all();
        return view('admin.productos.crear', compact('productos'));
    }

    // Proceso de Creación de un Registro
    public function store(CreateProductos $request)
    {
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
        $productos = new Productos;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'

        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->fecha_caducidad = $request->fecha_caducidad;
        $productos->id_tipo = $request->id_tipo;
        $productos->precio = $request->precio;
        $productos->stock =$request->stock;


        // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante
        $productos->img = $request->file('img')->store('/');

        // Guardamos la fecha de creación del registro
        $productos->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'productos'
        $productos->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/productos')->with('message','Guardado Satisfactoriamente !');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $productos = Productos::find($id);
        $tipos = Tipos::all();
        return view('admin.productos.detalles', compact('productos','tipos'));
    }

    public function showProducto($id)
    {
        $producto = Productos::find($id);

        if (!$producto) {
            return redirect()->route('home')->with('error', 'Producto no encontrado.');
        }

        return view('admin.productos.vista', compact('producto'));
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $productos = Productos::find($id);
        $tipos = Tipos::all();
        return view('admin.productos.actualizar', compact('tipos', 'productos'));
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(UpdateProductos $request, $id)
    {

        $productos = Productos::find($id);
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->fecha_caducidad = $request->fecha_caducidad;
        $productos->id_tipo = $request->id_tipo;
        $productos->precio = $request->precio;
        $productos->stock =$request->stock;

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $productos->img = $request->file('img')->store('/');
        }

        // Guardamos la fecha de actualización del registro
        $productos->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'productos'
        $productos->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/productos');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $productos = Productos::find($id);

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $productos->img);
        Storage::delete($imagen);

        // Elimino el registro de la tabla 'productos'
        Productos::destroy($id);

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación
        // $productos->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/productos');
    }

    public function vista($id)
{
    $productos = Productos::findOrFail($id);
    return view('productos.vista', compact('productos'));
}

public function addToCart(Request $request)
{
    $id = $request->input('producto_id');
    $quantity = $request->input('quantity', 1); // Por defecto, agregar 1 si no se especifica

    // Obtener el producto desde la base de datos
    $productos = Productos::findOrFail($id);


    // Si el producto ya está en el carrito, aumentar la cantidad
    if(isset($cart[$id])) {
        $cart[$id]['cantidad'] += $quantity;
    } else {
        // Si el producto no está en el carrito, agregarlo
        $cart[$id] = [
            'id' => $productos->id, // Asegurarse de que el ID del producto esté aquí
            'nombre' => $productos->nombre,
            'precio' => $productos->precio,
            'cantidad' => $quantity,
            'img' => $productos->img
        ];
    }

    // Guardar el carrito en la sesión
    session()->put('cart', $cart);

    return redirect()->route('carrito')->with('success', 'Producto agregado al carrito');
}


}


