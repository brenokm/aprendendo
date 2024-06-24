<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $primaryKey = 'funcionario_id';

    protected $fillable=[  'funcionario_nome',
    'funcionario_login','funcionario_senha'];


public function professor(){
    return $this->hasMany(Professor::class,'funcionario_id','funcionario_id');
}




}
