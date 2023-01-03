<?php

namespace App\Repositories;

use App\Models\buku;
use App\Repositories\BaseRepository;

/**
 * Class bukuRepository
 * @package App\Repositories
 * @version January 3, 2023, 4:11 am UTC
*/

class bukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_buku',
        'nama_buku',
        'kategori',
        'pengarang',
        'penerbit'
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
        return buku::class;
    }
}
