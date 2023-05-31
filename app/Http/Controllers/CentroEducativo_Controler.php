<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentrosEducativos;
use Illuminate\Support\Facades\DB;
class CentroEducativo_Controler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $centros=DB::table('centroEducativo')
                    ->select('IdCentro','CodigoUnico','Nombre','Departamento','Municipio')
                    ->where('Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('CodigoUnico','=',$texto)
                    ->orwhere('Departamento','LIKE','%'.$texto.'%')
                    ->orwhere('municipio','LIKE','%'.$texto.'%')
                    ->orderby('Nombre','asc')
                    ->paginate(5);
        //$centros=CentrosEducativos::all();
       return view('centros.index',compact('centros','texto'));
        //return compact('centros','texto');
    }
    public function search(Request $request)
    {
        $texto=trim($request->get('texto'));
        $centros=DB::table('centroEducativo')
                    ->select('IdCentro','CodigoUnico','Nombre','Departamento','Municipio')
                    ->where('Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('CodigoUnico','=',$texto)
                    ->orwhere('Departamento','LIKE','%'.$texto.'%')
                    ->orwhere('municipio','LIKE','%'.$texto.'%')
                    ->orderby('Nombre','asc')
                    ->paginate(5);
        //$centros=CentrosEducativos::all();
        return $centros; //compact('centros','texto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        return view('centros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centro=new CentrosEducativos;
        $centro->Nombre=$request->input('nombre');
        $centro->CodigoUnico=$request->input('codigounico');
        $centro->Departamento=$request->input('departamento');
        $centro->Municipio=$request->input('municipio');
        $centro->save();

        return redirect()->route('centros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$centros=CentrosEducativos::findOrFail($id);   
        $centros=DB::table('centroEducativo')
                    ->select('IdCentro','CodigoUnico','Nombre','Departamento','Municipio')
                    ->where('Nombre','LIKE','%'.$id.'%')
                    ->orwhere('CodigoUnico','=',$id)
                    ->orwhere('Departamento','LIKE','%'.$id.'%')
                    ->orwhere('municipio','LIKE','%'.$id.'%')
                    ->orderby('Nombre','asc')
                    ->paginate(5);   
        return compact('centros');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centro=CentrosEducativos::findOrFail($id);
        return view('centros.edit',compact('centro'));
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
        $centro=CentrosEducativos::findOrFail($id);
        $centro->Nombre=$request->input('nombre');
        $centro->CodigoUnico=$request->input('codigounico');
        $centro->Departamento=$request->input('departamento');
        $centro->Municipio=$request->input('municipio');
        $centro->save();
        return redirect()->route('centros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centro=CentrosEducativos::findOrFail($id);
        $centro->delete();
        return redirect()->route('centros.index');
    }
}
