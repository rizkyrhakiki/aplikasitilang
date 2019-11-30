<?php

namespace App\Repositories;

use App\Models\InformasiTilang;
use App\Repositories\BaseRepository;

/**
 * Class InformasiTilangRepository
 * @package App\Repositories
 * @version November 21, 2019, 4:30 pm UTC
*/

class InformasiTilangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'kotas_id',
        'lokasi',
        'keterangan'
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
        return InformasiTilang::class;
    }
}
