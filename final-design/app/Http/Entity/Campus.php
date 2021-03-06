<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campus extends Model
{
    use SoftDeletes;

    protected $table = 'campus';
    protected $guarded = [];

    public function apartments()
    {
        return $this->hasMany('App\Http\Entity\Apartment');
    }

    public static function getAll()
    {
        $campuses = self::where(['school_id' => session()->get('user')->school_id])->get();

        return $campuses;
    }
}
