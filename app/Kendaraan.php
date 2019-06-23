<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = "kendaraan";

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
