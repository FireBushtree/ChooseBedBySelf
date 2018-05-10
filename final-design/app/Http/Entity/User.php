<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $guarded = ['role'];

    public function school()
    {
        return $this->belongsTo('App\Http\Entity\School');
    }
}
