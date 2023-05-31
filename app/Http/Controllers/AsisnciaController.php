<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asisncia;
use Illuminate\Support\Facades\DB;

class AsisnciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $centros=DB::table('centroeducativo AS CE')
                    ->select('A.Id_Asistencia','A.Id_Centro','A.Id_Matricula','CE.Nombre as Centro_Educativo',
                    'D.Nombres','D.Apellidos','M.Turno','M.Modalidad','M.AmbosSexos as Matricula_AS','M.Femenino',
                    'A.Ambos_Sexos','A.Femenino','A.Ambos_Sexos/M.AmbosSexos as Porcentaje','A.Fecha')

                    ->innerjoin('matricula as M','CE.idCentro','=','M.Id_Centro')
                    ->innerjoin('director_centro as dc','dc.Id_Centro','=','M.Id_Centro')
                    ->innerjoin('directores as D','D.Id_Director','=','dc.Id_Director')
                    ->innerjoin('asistencia AS A','A.Id_Matricula','=','M.id_Matricula')      

                    ->where('CE.Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('D.Nombres','LIKE','%'.$texto.'%')
                    ->orwhere('D.Apellidos','LIKE','%'.$texto.'%')
                    ->orwhere('CE.CodigoUnico','=',$texto)
                    ->orwhere('CE.Departamento','LIKE','%'.$texto.'%')
                    ->orwhere('CE.municipio','LIKE','%'.$texto.'%')
                    ->orderby('CE.Nombre','asc')

                    ->paginate(7);
        //$centros=CentrosEducativos::all();
        return $centros; //compact('centros','texto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
