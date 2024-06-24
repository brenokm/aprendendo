<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    protected $primaryKey = 'disciplina_id';


    protected $fillable=[  
    'disciplina_nome',
   'disciplina_carga_horaria'];

     public function professores(){
        return $this->hasMany(Professor::class, 'professor_disciplina','professor_disciplina');
     }

     public function alunosDisciplinas(){
        return $this->hasMany(Aluno_Disciplina::class, 'disciplina_id','disciplina_id');
     }
}
