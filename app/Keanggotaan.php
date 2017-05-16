<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keanggotaan extends Model
{
    protected $fillable = [
        'jenis','simpanan_pokok','simpanan_wajib','bunga_simpanan','denda_simpanan', 'keterangan'
    ];

}
