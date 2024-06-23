<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno_Disciplina extends Model
{
    use HasFactory;

    protected $table = 'alunos_disciplinas_table';
    protected $primaryKey = 'alunos_disciplinas_id';
    protected $fillable = [
      
            'disciplina_id',
            'curso_id'      
    ];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id','disciplina_id');
    }

    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id','aluno_id');
    }
}
