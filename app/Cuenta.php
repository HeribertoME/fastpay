<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuenta
 * @package App
 */
class Cuenta extends Model
{
    /**
     * La tabla usada por el modelo
     *
     * @var string nombre de la tabla
     */
    protected $table = 'cuenta';

    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno',
        'edad', 'direccion', 'tel_cel', 'foto', 'user', 'pass',
        'type'];

    protected $primaryKey = 'cve_cuenta';

    public function carritos_temp()
    {
        $this->hasMany('App\Carrito_temp');
    }
    
    public function compras_gral()
    {
        $this->hasMany('App\Compra_gral');
    }

}


