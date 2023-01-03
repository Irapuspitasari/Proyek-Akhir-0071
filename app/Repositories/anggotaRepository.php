<?php

namespace App\Repositories;

use App\Models\anggota;
use App\Repositories\BaseRepository;

/**
 * Class anggotaRepository
 * @package App\Repositories
 * @version January 3, 2023, 10:00 am UTC
*/

class anggotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_anggota',
        'nama_anggota',
        'no_tlp',
        'status',
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
        return anggota::class;
    }
}
