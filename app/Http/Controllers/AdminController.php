<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatSucursal;
use App\CatEmpleados;
use App\CatEstado;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $suc=CatSucursal::all();
        return view('admin.agregar')->with("suc",$suc);
    }


    public function crear_empleado(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:50',
            'cedula' => 'required|unique:catempleado',
        ]);
     $fechaentrada= str_replace('/','-', $request->input("fechaingreso"));
     $fechacumple= str_replace('/','-', $request->input("fechanacimiento"));
    $empleado = new CatEmpleados;
    $empleado->nombre=$request->input("nombre");
    $empleado->cedula=$request->input("cedula");
    $empleado->fechaingreso=Carbon::parse($fechaentrada)->format('Y-m-d');
    $empleado->fechacumple=Carbon::parse($fechacumple)->format('Y-m-d');
    $empleado->catestado_id='1';
    $empleado->catsucursal_id=$request->input("sucursal-id");

        if($empleado->save())
        {
            return view("mensajes.empleado_creado")->with("msj","Empleado agregado correctamente") ;
        }
        else
        {
            return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
        }

    }



}
