<?php

namespace Reserva;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'periodos';
    protected $timestamps = false;

    public function dias()
    {
        return $this->belongsTo('Reserva\Dia');
    }
}
