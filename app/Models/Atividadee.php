<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividadee extends Model
{
    use HasFactory;

    protected $table = 'atividades';
    protected $primaryKey = 'atividade_id';


    protected $fillable=[  'turma_id','atividade_nome'];

    public function turmas(){
        return $this->belongsTo(Turmaa::class, 'turma_id','turma_id');
    }    
    
}
