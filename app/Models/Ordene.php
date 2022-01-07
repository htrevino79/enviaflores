<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\Producto;

/**
 * Class Ordene
 *
 * @property $id
 * @property $producto
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    static $rules = [
		'producto' => 'required',
		'proveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','proveedor'];


    public function productos()
    {
        return $this->belongsTo(Producto::class,'producto');
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedore::class,'proveedor');
    }

    

}
