<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';

    public function Campus()
    {
        return $this->hasMany('App\Http\Entity\Campus');
    }
}
