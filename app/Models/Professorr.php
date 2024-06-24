<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorr extends Model
{
    use HasFactory;

    protected $table = 'professores';
    protected $primaryKey = 'professor_id';

    protected $fillable=[  'funcionario_id'];


public function funcionario(){
    return $this->belongsTo(Funcionario::class , 'funcionario_id','funcionario_id');
}
public function turmas(){
    return $this->hasMany(Turmaa::class , 'funcionario_id','funcionario_id');
}
}
