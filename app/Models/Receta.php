<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $fecha
 * @property $paciente
 * @property $created_at
 * @property $updated_at
 * @property $medico_id
 *
 * @property Medico $medico
 * @property ProductoReceta[] $productoRecetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'paciente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','paciente','medico_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'medico_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productoRecetas()
    {
        return $this->hasMany('App\Models\ProductoReceta', 'receta_id', 'id');
    }
    

}
