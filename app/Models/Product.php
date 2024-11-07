<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Estos son los campos que pueden ser asignados masivamente
    protected $fillable = [
        'name',
        'description',
        'price',
        'id_categoria', 

    ];



    /**
     * Relación inversa muchos a uno con el modelo Categoria.
     * Un producto pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
