<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Especifica la columna que es la clave primaria
    protected $primaryKey = 'id_categoria';

 
    // Estos son los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
    ];

    /**
     * Relación uno a muchos con el modelo Product.
     * Una categoría puede tener muchos productos.
     */
    public function productos()
    {
        return $this->hasMany(Product::class, 'id_categoria', 'id_categoria');
    }
}
