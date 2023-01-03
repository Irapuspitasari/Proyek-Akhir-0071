<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class buku
 * @package App\Models
 * @version January 3, 2023, 4:11 am UTC
 *
 * @property string $kode_buku
 * @property string $nama_buku
 * @property string $kategori
 * @property string $pengarang
 * @property string $penerbit
 */
class buku extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bukus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_buku',
        'nama_buku',
        'kategori',
        'pengarang',
        'penerbit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_buku' => 'string',
        'nama_buku' => 'string',
        'kategori' => 'string',
        'pengarang' => 'string',
        'penerbit' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_buku' => 'required',
        'nama_buku' => 'required',
        'kategori' => 'required',
        'pengarang' => 'required',
        'penerbit' => 'required'
    ];

    
}
