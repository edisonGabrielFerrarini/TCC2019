<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servico extends Model
{

    protected $table = "servico";

    protected $fillable = [
        'tipo_servico', 'desc_servico', 'img_servico', 'user_id', 'categoria', 'id_servico'
    ];

}
