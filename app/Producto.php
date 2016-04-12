<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = ['cve_producto', 'nombre', 'precio', 'marca',
            'contenido_neto', 'categoria', 'imagen',
            'caducidad', 'descripcion'];
    
    protected $primaryKey = 'cve_producto';

    public function carritos_temp()
    {
        return $this->hasMany('App\Carrito_temp');
    }

    public function compras_gral()
    {
        return $this->belongsToMany('App\Compra_gral')->withTimestamps();
    }
    
    public function ofertas()
    {
        return $this->belongsToMany('App\Oferta')->withTimestamps();
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}

