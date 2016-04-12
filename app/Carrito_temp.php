<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito_temp extends Model
{
    protected $table ='carrito_temp';
    protected $fillable = ['cantidad', 'cve_producto', 'cve_cuenta'];
    protected $primaryKey = 'id_carrito';

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }

    public function cuenta()
    {
        return $this->belongsTo('App\Cuenta');
    }
}
