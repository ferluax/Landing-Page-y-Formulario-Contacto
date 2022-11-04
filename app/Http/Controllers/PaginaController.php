<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    
    public function landingpage()
    {
        return view('landingpage');
    }

    public function prueba()
    {
        return view('prueba');
    }

    public function recibeFormContacto(Request $request)
    {
        /*recibe info
        valida
        insertar a db
        redirigir*/
        //dd($request->all());
        //dd($request->input('nombre'));
        //dd($request->correo);
        $request ->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => ['required', 'email'],
            'mensaje' => 'required',
        ]);
    }
    
    public function contacto($version_id = null)
    {
        $versiones = 1234;

        if (!empty($version_id)){
            $version = $versiones;
        } else{
            $version = null;
        }

        return view('contacto', compact('versiones', 'version'));
    }

    public function precios($cupon = null)
    {
        $nombre_pagina = 'Pagina de Precios';

        $precios = [
            'basico' => 12,
            'intermedio' => 58,
            'premium' => 180,
        ];

        $texto_cupon = '<h2>Cupon Aplicado</h2>';

        return view('precios', compact('nombre_pagina', 'precios', 'cupon', 'texto_cupon'));
    }
}
