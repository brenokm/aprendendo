<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professores';
    protected $primaryKey = 'professor_id';

    protected $fillable=[  'usuario_id','disciplina_id',
    'professor_nome'];
    
    public function usuarios(){
        return $this->belongsTo(Usuario::class, 'usuario_id','usuario_id');
    }
    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id','disciplina_id');
    }

   public function turma(){
    return $this->hasMany(Turma::class, 'turma_id','turma_id');

   }
    
}
