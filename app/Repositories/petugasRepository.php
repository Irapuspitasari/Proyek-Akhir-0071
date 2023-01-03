<?php

namespace App\Repositories;

use App\Models\petugas;
use App\Repositories\BaseRepository;

/**
 * Class petugasRepository
 * @package App\Repositories
 * @version January 3, 2023, 4:14 am UTC
*/

class petugasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_petugas',
        'nama_petugas',
        'shift',
        'jabatan',
        'alamat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return petugas::class;
    }
}
