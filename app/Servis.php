<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "servis";

    public function mekanik()
    {
        return $this->belongsTo(Mekanik::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function nota()
    {
        return $this->belongsTo(Nota::class);
    }

    public function servis_sparepart()
    {
        return $this->belongsToMany(Sparepart::class, 'servis_sparepart')->withPivot('jmlh', 'hrg_servis');
    }
}
