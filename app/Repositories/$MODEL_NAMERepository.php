<?php

namespace App\Repositories;

use App\Models\$MODEL_NAME;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class $MODEL_NAMERepository
 * @package App\Repositories
 * @version June 28, 2018, 12:48 pm UTC
 *
 * @method $MODEL_NAME findWithoutFail($id, $columns = ['*'])
 * @method $MODEL_NAME find($id, $columns = ['*'])
 * @method $MODEL_NAME first($columns = ['*'])
*/
class $MODEL_NAMERepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return $MODEL_NAME::class;
    }
}
