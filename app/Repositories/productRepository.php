<?php

namespace App\Repositories;

use App\Models\product;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version June 28, 2018, 1:03 pm UTC
 *
 * @method product findWithoutFail($id, $columns = ['*'])
 * @method product find($id, $columns = ['*'])
 * @method product first($columns = ['*'])
*/
class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}
