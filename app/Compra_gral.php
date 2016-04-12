<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra_gral extends Model
{
    protected $table = 'compra_gral';
    protected $fillable =['nombre_list', 'fecha_c', 'forma_pago',
            'iva', 'subtotal', 'total', 'cve_cuenta'];
    protected $primaryKey = 'id_cg';

    public function cuenta()
    {
        $this->belongsTo('App\Cuenta');
    }

    public function productos()
    {
        $this->belongsToMany('App\Producto')->withTimestamps();
    }
}