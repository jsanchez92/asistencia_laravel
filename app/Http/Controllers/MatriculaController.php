<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\CentrosEducativos;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $matriculas=DB::table('Matricula')
                    ->join('centroeducativo','Matricula.ID_Centro','=','centroeducativo.IdCentro')
                    ->select('Matricula.id_Matricula','Matricula.Id_Centro','centroeducativo.Nombre','centroeducativo.CodigoUnico',
                             'Matricula.Turno','Matricula.Modalidad','Matricula.AmbosSexos','Matricula.Femenino')
                    ->where('centroeducativo.Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('centroeducativo.CodigoUnico','=',$texto)
                    ->orwhere('Matricula.Modalidad','LIKE','%'.$texto.'%')
                    ->orwhere('Matricula.Turno','LIKE','%'.$texto.'%')
                    ->orderby('centroeducativo.Nombre','asc')
                    ->paginate(5);
        //$centros=CentrosEducativos::all();
        return view('matricula.index',compact('matriculas','texto'));
        //$Matricula=Matricula::All;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$centro=CentrosEducativos::findOrFail($id);   ;
        return view('matricula.create');//, compact('centro'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula=new Matricula;
        $matricula->Turno=$request->input('turno');
        $matricula->Modalidad=$request->input('modalidad');
        $matricula->AmbosSexos=$request->input('ambossexos');
        $matricula->Femenino=$request->input('femenino');
        $matricula->Id_Centro=$request->input('idcentro');
        $matricula->save();

        return redirect()->route('matricula.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centro=CentrosEducativos::findOrFail($id);   ;
        return view('matricula.create', compact('centro'));
        //$matricula=Matricula::findOrFail($id);      
        //return view('matricula.show', compact('matricula'));
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
        $matricula=Matricula::findOrFail($id);  
        $matricula->delete();
        return redirect()->route('matricula.index');
    }
}
