<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas
 * @package App\Models
 * @version October 5, 2021, 2:38 am UTC
 *
 * @property integer $id_paciente
 * @property string $ fecha_cita
 * @property integer $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'citas';
    public $timestamps=false;
    protected $primaryKey='idcitas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_paciente',
        ' fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCitas' => 'integer',
        'id_paciente' => 'integer',
        ' fecha_cita' => 'datetime',
        'id_doctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_paciente' => 'nullable|integer',
        ' fecha_cita' => 'nullable',
        'id_doctor' => 'nullable|integer'
    ];

    
}
