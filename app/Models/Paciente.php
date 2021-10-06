<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Paciente
 * @package App\Models
 * @version October 5, 2021, 11:48 pm UTC
 *
 * @property string $ape_nom
 * @property integer $dni
 * @property integer $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'paciente';
    public $timestamps=false;
    protected $primaryKey='idPaciente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idPaciente' => 'integer',
        'ape_nom' => 'string',
        'dni' => 'integer',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'celular' => 'nullable|integer'
    ];

    
}
