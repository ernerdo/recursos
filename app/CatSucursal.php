<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSucursal extends Model
{
    protected $fillable = [
        'sucursal',
    ];
    protected $table = 'catsucursal';

}
