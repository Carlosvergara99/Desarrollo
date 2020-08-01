<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    protected $table = 'tiendas';
    protected $guarded = ['id'];
}
