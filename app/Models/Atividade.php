<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $table = 'atividades';
    protected $primaryKey = 'atividade_id';


    protected $fillable=[  
        'turma_id',
          'atividade_nome',
          'atividade_descricao'

    ];

    public function turmas(){
        return $this->belongsTo(Turma::class, 'turma_id','turma_id');
    }
}
