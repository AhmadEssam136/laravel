<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class $MODEL_NAME
 * @package App\Models
 * @version June 28, 2018, 12:48 pm UTC
 *
 * @property string name
 */
class $MODEL_NAME extends Model
{
    use SoftDeletes;

    public $table = '$_m_o_d_e_l__n_a_m_e_s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
