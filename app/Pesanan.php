<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    public function sparepart()
    {
        return $this->belongsToMany(Sparepart::class, 'pesanan_sparepart')->withPivot('jmlh', 'hrg_psn');
    }
}
