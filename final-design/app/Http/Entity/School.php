<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';

    public function campuses()
    {
        return $this->hasMany('App\Http\Entity\Campus');
    }
}
