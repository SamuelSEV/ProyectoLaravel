<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsTo(Proveedor::class, 'categoria','categoria');
    }
}
