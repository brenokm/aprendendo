<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $primaryKey = 'aluno_id';


    protected $fillable=[  
    
        'login',
        'senha'
    ];

    public function usuarios(){
        return $this->belongsTo(Usuario::class, 'usuario_id','usuario_id');
    }
    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id','disciplina_id');
}
}