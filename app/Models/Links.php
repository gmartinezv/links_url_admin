<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{


protected $fillable = [
        'titulo', 'descripcion', 'url', 'categoria_id', 'status'
    ];

    public const PAGINATE = 10;

}
