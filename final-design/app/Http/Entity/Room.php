<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $table = 'room';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function beds()
    {
        return $this->hasMany('App/Http/Entity/Bed');
    }
}
