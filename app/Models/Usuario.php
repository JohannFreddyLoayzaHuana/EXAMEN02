<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Usuario
 * @package App\Models
 * @version October 5, 2021, 11:49 pm UTC
 *
 * @property string $ape_nom
 * @property string $usuario
 * @property integer $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'usuario';
    public $timestamps=false;
    protected $primaryKey='idUsuario';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idUsuario' => 'integer',
        'ape_nom' => 'string',
        'usuario' => 'string',
        'password' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|integer'
    ];

    
}
