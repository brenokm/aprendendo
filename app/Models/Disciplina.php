<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    protected $primaryKey = 'disciplina_id';


    protected $fillable=[  'usuario_id',
    'disciplina_nome',
   'disciplina_carga_horaria'];

   public function usuarios(){
    return $this->belongsTo(Usuario::class, 'usuario_id','usuario_id');
   }

   
}
