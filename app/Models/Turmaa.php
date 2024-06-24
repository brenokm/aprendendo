<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmaa extends Model
{
    use HasFactory;

    protected $table = 'turmas';
    protected $primaryKey = 'turma_id';

    protected $fillable=[  'turma_numero','professor_id'];


public function professor(){
    return $this->belonsTo(professorr::class , 'turma_id','turma_id');
}
public function crianca(){
    return $this->hasMany(crianca::class , 'turma_id','turma_id');
}
public function atividade(){
    return $this->hasMany(atividade::class , 'turma_id','turma_id');
}
}