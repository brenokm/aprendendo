<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $table = 'turmas';
    protected $primaryKey = 'turma_id';

    protected $fillable=[
       'turma_nome',
            'professor_id',
            'aluno_id',
            'curso_id',
            'disciplina_id'
    ];

    public function professores(){
     return $this->belongsTo(Professor::class,'professor_id','professor_id');
    }
    public function alunos(){
        return $this->belongsTo(Aluno::class, 'aluno_id','aluno_id');
    }

    public function cursos(){
        return $this->belongsTo(Curso::class, 'curso_id','curso_id');
    }    
    public function disciplinas(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id','disciplina_id');
    }
    public function atividades(){
        return $this->hasMany(Aluno::class, 'turma_id', 'turma_id');
     }
    
}

