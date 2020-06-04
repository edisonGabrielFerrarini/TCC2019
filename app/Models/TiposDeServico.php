<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposDeServico extends Model
{
    protected $table = 'tipos_de_servico';

    protected $fillable = [
        'tipo_servico', 'tipos_servico_descricao'
    ];
}
