<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';


    protected $fillable = [
        'usuario_nome', 
        'usuario_senha',      
     ];


     public function alunos(){
        return $this->hasMany(Aluno::class, 'usuario_id', 'usuario_id');
     }
     public function professores(){
        return $this->hasMany(Professor::class, 'usuario_id', 'usuario_id');
     }
     
}
