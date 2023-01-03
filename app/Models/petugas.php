<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class petugas
 * @package App\Models
 * @version January 3, 2023, 4:14 am UTC
 *
 * @property string $kode_petugas
 * @property string $nama_petugas
 * @property string $shift
 * @property string $jabatan
 * @property string $alamat
 */
class petugas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'petugas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_petugas',
        'nama_petugas',
        'shift',
        'jabatan',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_petugas' => 'string',
        'nama_petugas' => 'string',
        'shift' => 'string',
        'jabatan' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_petugas' => 'required',
        'nama_petugas' => 'required',
        'shift' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required'
    ];

    
}
