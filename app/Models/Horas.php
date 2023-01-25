<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
    use HasFactory;
    protected $table = "horas";
    protected $primaryKey = ['diaH', 'horaH', 'codAs'];
    protected $fillable = ['diaH','horaH','codAs'];
    public $timestamps = false;
    public $incrementing = false;
    public function getHorario(){
        return DB::table('horas')
        ->leftJoin('asignaturas','horas.codAs',"=",'asignaturas.codAs')
        ->leftJoin('users','asignaturas.user_id','=','users.id')
        ->where('users.id','=',auth()->id())
        ->orderBy('horaH', 'asc')->orderBy('diaH', 'asc')->get();
    }
    public function getAsignaturaById($id){
        return Asignaturas::all()->find($id);
    }
}
