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
        'file',
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'kota',
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
        'file' => 'file',
        'nama' => 'string',
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'kota' => 'string',
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

    
}
