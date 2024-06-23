<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina_Curso extends Model
{
    use HasFactory;
    protected $table = 'disciplinas_cursos';
    protected $primaryKey = 'disciplina_cursos_id';


    protected $fillable=[  'curso_id','disciplina_id'];

    public function cursos(){
        return $this->belongsTo(Curso::class, 'curso_id');
    }    
    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id');
    }
}
