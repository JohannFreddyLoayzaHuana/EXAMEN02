<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctor
 * @package App\Models
 * @version October 5, 2021, 11:46 pm UTC
 *
 * @property string $ape_nom
 * @property integer $dni
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'doctor';
    public $timestamps=false;
    protected $primaryKey='idDoctor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idDoctor' => 'integer',
        'ape_nom' => 'string',
        'dni' => 'integer',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
