<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Director;
use App\Models\CentrosEducativos;
class Directores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request  )
    {
        $texto=trim($request->get('texto'));
        $directores = DB::table('directores as D')
                    ->leftJoin('director_centro as DC', 'DC.Id_Director', '=', 'D.Id_Director')
                    ->leftJoin('centroeducativo as CE', 'CE.IdCentro', '=', 'DC.Id_Centro')
                    ->select('D.Id_Director','CE.IdCentro','D.Nombres','D.Apellidos', 'CE.Nombre as Centro_Educativo','CE.CodigoUnico')
                    ->where('CE.Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('CE.CodigoUnico','=',$texto)
                    ->orwhere('D.Nombres','LIKE','%'.$texto.'%')
                    ->orwhere('D.Apellidos','LIKE','%'.$texto.'%')
                    ->orderby('D.Nombres','asc')
                    ->paginate(5);
        //$centros=CentrosEducativos::all();
        return view('directores.index',compact('directores','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director=new Director;
        $director->Nombres=$request->input('nombres');
        $director->Apellidos=$request->input('apellidos');
        $director->User=$request->input('user');
        $director->Pass=$request->input('pass');
        $director->save();

        return redirect()->route('directores.index');
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
