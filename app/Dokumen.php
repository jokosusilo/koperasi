<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $table     = 'dokumens';
    protected $guarded   = array(); 
    protected $fillable = [
        'user_id',
        'ktp',
        'kk',
        'assets'

    ];
}
