<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    protected $table = "mekanik";

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
