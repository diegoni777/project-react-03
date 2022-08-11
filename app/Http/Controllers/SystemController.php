<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\AlumnosModel;
use App\models\GruposModel;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    public function get01()
    {
        $consulta = AlumnosModel::all();
        return response()->json($consulta, 200);
    }
    public function get02()
    {
        return AlumnosModel::all();
    }
    public function get03()
    {
        $consulta = DB::select("SELECT * FROM tb_alumnos");
        return response()->json($consulta, 200);
    }
    //----------------CONSULTA ESPECIFICA------------//
    public function get04(AlumnosModel $id)
    {
        return response()->json($id, 200);
    }
    public function get05($id)
    {
        $consulta = DB::select("SELECT * FROM tb_alumnos WHERE id=" . $id);
        return response()->json($consulta, 200);
    }
    public function get06($id)
    {
        return AlumnosModel::find($id);
    }
    public function get07()
    {
        $consulta = DB::select("SELECT a.id, CONCAT(a.app,', ',a.nombre) AS nombre, a.fn,a.img,IF(a.genero>0,'Masculino','Femenino') AS genero, g.clave AS grupo FROM tb_alumnos AS a INNER JOIN tb_grupos AS g ON g.id = a.id_grupo ORDER BY g.clave,a.nombre ASC");
        return response()->json($consulta, 200);
    }
    //------------ALTA ALUMNOS-----------------//
    public function post01(Request $request)
    {
        $alta = AlumnosModel::create($request->all());
        return response()->json($alta, 201);
    }
    //------------Modificación ALUMNOS-----------------//
    public function put01(Request $request, AlumnosModel $id)
    {
        $id->update($request->all());
        return response()->json($id, 200);
    }
    //----------------Eliminación de alumnos-------------//
    public function del01(AlumnosModel $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
    public function get01g()
    {
        $consulta = GruposModel::all();
        return response()->json($consulta, 200);
    }
}
