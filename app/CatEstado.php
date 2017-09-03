<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $fillable = [
        'estado',
    ];
    protected $table = 'catestado';
}
