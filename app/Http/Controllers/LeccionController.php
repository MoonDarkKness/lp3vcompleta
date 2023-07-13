<?php

namespace App\Http\Controllers;
use App\Models\Leccion;
use Illuminate\Http\Request;

class LeccionController extends Controller
{
    public function index(){
        //traer informacion de la base de datos
        $leccion = leccion::All();
        return view("leccion.mostrarLeccion")
            ->with("leccion", $leccion);
    }   
    public function mostrar(){
        $leccion = new leccion();
        dd(($leccion)->all());//si es where te tarea la info con el get cambio del all(){where("id",3)->get()}
    }
}
