<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = "nota";

    public function servis()
    {
        return $this->hasOne(Servis::class);
    }
}
