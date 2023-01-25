<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model
{
    use HasFactory;
    protected $table = "asignaturas";
    protected $primaryKey = 'codAs';
    protected $fillable = ['user_id','nombreAs','nombreCortoAs', 'profesorAs','colorAs'];
    public $timestamps = false;
    public function getAsignaturas(){
        return Asignaturas::all()->where('user_id',"=",auth()->id());
    }
    public function getAsignaturaById($id){
        return Asignaturas::all()->find($id);
    }
}
