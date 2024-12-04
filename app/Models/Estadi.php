<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estadi extends Model
{
    public function equips()
    {
        return $this->hasMany(Equip::class);
    }
}
