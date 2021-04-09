<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D_externo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'codigo',
        'titulo',
        'revisao_edicao',
        'data_aprovacao',
        'num_copias',
        'data_atualizacao',
        'analise_critica_verificacao',
        'atualizacao_em'
        
    ]; 

    
}