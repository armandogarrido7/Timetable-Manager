<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Horas;
use App\Models\Asignaturas;
use App\Http\Controllers\AsignaturasController;
class HorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $horas;
    public function __construct(Horas $horas)
    {
        $this->horas = $horas;
    }
    public function index()
    {
        $horas = $this->horas->getHorario();
        return view('horario.ver', ['horas' => $horas]);
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
        $hora = new Horas($request->all());
        $hora->save();
        return redirect()->action([HorasController::class, 'index']);
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
    public function edit()
    {
        $asignaturaController = new AsignaturasController(new Asignaturas());
        $asignaturas = $asignaturaController->getAsignaturas();
        return view('horario.editar', ['asignaturas' => $asignaturas]);
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
    public function destroy($diaH, $horaH, $codAs)
    {
        DB::table('horas')->where('diaH', $diaH)->where('horaH', $horaH)->where('codAs', $codAs)->delete();
        return redirect()->action([HorasController::class, 'index']);
    }
}
