<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Verificar si el usuario se registró recientemente
                if ($request->session()->has('registered')) {
                    // Limpiar la sesión para que no redirija de nuevo
                    $request->session()->forget('registered');
                    return redirect()->route('login'); // Redirigir al login
                }

                // Aquí se asegura que el usuario ha iniciado sesión correctamente
                if (Auth::guard($guard)->user() !== null) {
                    // Redirigir a /dash2 si ya está autenticado correctamente
                    return redirect()->route('dash2');
                }
            }
        }

        return $next($request);
    }
}
