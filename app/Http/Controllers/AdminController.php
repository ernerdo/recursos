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
        return view('admin.agregar');
    }


    public function addempleado(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:50',
            'cedula' => 'required|digits_between:4,4',
        ]);
     $fechaentrada= str_replace('/','-', $request->input("fechaingreso"));
     $fechacumple= str_replace('/','-', $request->input("fechacumple"));
    $empleado = new CatEmpleados;
    $empleado->nombre=$request->input("nombre");
    $empleado->cedula=$request->input("cedula");
    $empleado->fechaingreso=Carbon::parse($fechaentrada)->format('Y-m-d');
    $empleado->fechacumple=Carbon::parse($fechacumple)->format('Y-m-d');
    $empleado->catestado_id='1';
    $empleado->catsucursal_id=$request->input("catsucursal_id");
    $empleado-save();
    }



}
