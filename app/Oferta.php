<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';

    protected $fillable = ['cve_producto'];

    protected $primaryKey = 'cve_producto';

    
}
