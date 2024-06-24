<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
    use HasFactory;



    protected $table = 'criancas';
    protected $primaryKey = 'crianca_id';

    protected $fillable=[  'crianca_nome','crianca_responsavel','turma_id'];


public function turma(){
    return $this->belongsTo(Turma::class , 'crianca_id','crianca_id');
}
}
