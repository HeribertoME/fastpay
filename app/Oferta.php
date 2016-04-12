<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
    protected $fillable = ['name', 'description', 'star_date', 'end_date'];
    
    public function productos()
    {
        return $this->belongsToMany('App\Producto')->withTimestamps();
    }
    
}
