<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{

    protected $fillable = ['nom', 'estadi_id', 'titols'];

    public function estadi()
    {
        return $this->belongsTo(Estadi::class);
    }
}
