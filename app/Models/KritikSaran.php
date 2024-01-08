<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model.
     *
     * @var string
     */
    protected $table = 'kritikdansarans';

    /**
     * Kolom yang dapat diisi massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'kritiksaran',
    ];

    /**
     * Atribut yang harus diubah menjadi tipe tertentu.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'nomor_telepon' => 'integer',
        'kritiksaran' => 'string',
    ];
}
