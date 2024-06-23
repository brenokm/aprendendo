<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'curso_id';

    protected $fillable=[  'curso_nome'];

    public function turmas(){
        return $this->hasMany(Turma::class, 'curso_id', 'curso_id');
    }
}
