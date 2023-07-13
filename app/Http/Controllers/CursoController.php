<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //traer informacion de la base de datos
        $curso = curso::All();
        return view("clases.mostrar")
            ->with("curso", $curso);
    }            
     public function mostrar(){
        $Curso = new Curso();
        dd(($Curso)->all());//si es where te tarea la info con el get cambio del all(){where("id",3)->get()}
    }
    
    
        public function form(){
            return view("clases.registrar");//el view el mismo nombre del formulario
        }
        public function guardar(Request $request){
        //PARA HACER LA VALIDACION DE LOS CAMPOS PARA QUE SEA REQUERIDO Y PONERLE UNA REGLA AL CAMPO
        $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "instructor" => "required",
            "precio" => "required",
            "leccion" => "required",
            "categoria" => "required"
        ]);

        $curso = new Curso();
        $curso->nombre = $request->input("nombre");
        $curso->descripcion = $request->input("descripcion");
        $curso->instructor = $request->input("instructor");
        $curso->precio = $request->input("precio");
        $curso->leccion = $request->input("leccion");
        $curso->categoria = $request->input("categoria");
       
        $curso->save();
                    return redirect("clases/mostrar");
        }
    
    
    
}
    


