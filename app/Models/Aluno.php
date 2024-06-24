<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno_Disciplina;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $primaryKey = 'aluno_id';


    protected $fillable=[  
    
        'aluno_nome',
        'usuario_id',
        'turma_id' 
    ];

 
  public function aluno_disciplina(){  
    return $this->hasMany(Aluno_Disciplina::class, 'aluno_id', 'aluno_id');
  }

  public function usuario(){
    return $this->belongsTo(Usuario::class,'usuario_id','usuario_id');
  }
  
  public function turmas(){
    return $this->belongsTo(Turma::class, 'aluno_id', 'aluno_id');
  }
}