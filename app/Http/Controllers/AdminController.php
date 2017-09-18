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
    public function listado()
    {
        $empleados=CatEmpleados::paginate(10);
        return view('admin.lista')->with("empleados",$empleados);
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
            $notificacion = array(
                'message' => 'Empleado guardado',
                'alert-type' => 'success'
            );
            return back()->with($notificacion) ;
        }
        else
        {
            $notificacion = array(
                'message' => 'ocurrio un error',
                'alert-type' => 'error'
            );
            return back()->with($notificacion) ;
        }

    }

    public function busqueda (Request $request)
    {
        $busqueda = is_null($request->busqueda) ? '%' : '%'.$request->busqueda.'%';
        //$nombre = CatEmpleados::where('nombre', 'LIKE', $busqueda)->get();

        $nombre = CatEmpleados::join('catsucursal', 'catsucursal.id', '=', 'catempleado.catsucursal_id')->
        join('catestado', 'catestado.id', '=', 'catempleado.catestado_id')->
        where('nombre','LIKE',$busqueda)->
        select('catempleado.id','catempleado.nombre','catempleado.cedula','catempleado.fechaingreso','catsucursal.sucursal','catempleado.fechacumple','catestado.estado')->
        get();

        return response() ->json(['nombre' => $nombre]);
    }



}
