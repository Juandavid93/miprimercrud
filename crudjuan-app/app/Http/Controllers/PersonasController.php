<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }

   
    public function create()
    {
        //el formulario donde agregamos los datos 
        return view('agregar');

    }

    
    public function store(Request $request)
    {
        //sirve para guardar datos en la bd

    }

    
    public function show(Personas $personas)
    {
        //servira para obtener un registro de nuestra tabla 
        
        return view('eliminar');
    }

  
    public function edit(Personas $personas)
    {
        //este metodo nos sirve para traes los datos que se van a edita 
        //los agrega en el formulario 

        return view('actualizar');
    }

  
    public function update(Request $request, Personas $personas)
    {
        //este medoto actualiza los datos en la bd 
    }

  
    public function destroy(Personas $personas)
    {
        //Elimina un registro
    }
}
