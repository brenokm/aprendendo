<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno_Disciplina extends Model
{
    use HasFactory;

    protected $table = 'alunos_disciplinas_table';
    protected $primaryKey = 'alunos_disciplinas_id';
}
