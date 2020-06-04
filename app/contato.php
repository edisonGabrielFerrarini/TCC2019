<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    protected $table = "contato";

    protected $fillable = [
        'fixo', 'celular', 'site' ,'facebook', 'twitter', 'instagram', 'whats', 'email', 'user_id'
    ];

}
