<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $table = 'bed';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Http\Entity\User');
    }
}
