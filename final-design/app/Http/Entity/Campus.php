<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campus extends Model
{
    use SoftDeletes;

    protected $table = 'campus';
    protected $guarded = [];

    public function apartment()
    {
        return $this->hasMany('App\Http\Entity\Apartment');
    }
}
