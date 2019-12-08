<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InformasiTilang
 * @package App\Models
 * @version November 21, 2019, 4:30 pm UTC
 *
 * @property string nama
 * @property string tanggal_mulai
 * @property string tanggal_selesai
 * @property string lokasi
 * @property string keterangan
 */
class InformasiTilang extends Model
{
    use SoftDeletes;

    public $table = 'informasi_tilangs';
    
    public $timestamps = false;


    protected $dates = ['deleted_at'];



    public $fillable = [
        'foto',
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'kotas_id',
        'lokasi',
        'lat',
        'lng',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'foto' => 'file',
        'nama' => 'string',
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'kotas_id'=> 'integer',
        'lokasi' => 'string',
        'lat' => 'string',
        'lng' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        /*'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date|after:tanggal_mulai',*/
        'nama' => 'required',
    ];
//   public function Kota()
//    {
//        return $this->belongsTo(\App\Models\Kota::class, 'kotas_id');
//    }
    
}
