<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductoReceta
 *
 * @property $id
 * @property $producto_id
 * @property $receta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Receta $receta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductoReceta extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','receta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'receta_id');
    }
    

}
