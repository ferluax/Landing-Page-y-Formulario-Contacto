<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    
    public function landingpage()
    {
        return view('landingpage');
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
}
