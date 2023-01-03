<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class anggota
 * @package App\Models
 * @version January 3, 2023, 10:00 am UTC
 *
 * @property string $kode_anggota
 * @property string $nama_anggota
 * @property string $no_tlp
 * @property string $status
 * @property string $alamat
 */
class anggota extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'anggotas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_anggota',
        'nama_anggota',
        'no_tlp',
        'status',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_anggota' => 'string',
        'nama_anggota' => 'string',
        'no_tlp' => 'string',
        'status' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_anggota' => 'required',
        'nama_anggota' => 'required',
        'no_tlp' => 'required',
        'status' => 'required',
        'alamat' => 'required'
    ];

    
}
