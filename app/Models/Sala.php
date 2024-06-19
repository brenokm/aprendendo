<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    protected $table = 'salas';
    protected $primaryKey = 'sala_id';

   
    protected $fillable=[  'sala_nome'];
   
     public function turmas(){
        return $this->hasMany(Aluno::class, 'sala_id', 'sala_id');
     }
   
}
