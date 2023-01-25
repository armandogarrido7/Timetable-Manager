<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignaturas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $asignaturas;
    public function __construct(Asignaturas $asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }
    public function getAsignaturas(){
        return $this->asignaturas->getAsignaturas();
    }
    public function index()
    {
        $asignaturas = $this->asignaturas->getAsignaturas();
        return view('asignaturas.lista', ['asignaturas' => $asignaturas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignaturas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignatura = new Asignaturas($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $asignatura = $this->asignaturas->getAsignaturaById($id);
        return view('asignaturas.ver', ['asignatura' => $asignatura]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignatura= $this->asignaturas->getAsignaturaById($id);
        return view('asignaturas.editar', ['asignatura' => $asignatura]);
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
        $asignatura = Asignaturas::find($id);
        $asignatura->fill($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('horas')
        // ->leftJoin('asignaturas','horas.codAs',"=",'asignaturas.codAs')
        // ->where('horas.codAs','=',$id)->delete();
        $asignatura = Asignaturas::find($id);
        $asignatura->delete();
        return redirect()->action([AsignaturasController::class, 'index']);
    }
}
