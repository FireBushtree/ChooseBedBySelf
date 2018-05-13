<?php

namespace App\Http\Entity;

use App\Http\Entity\Campus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use SoftDeletes;

    protected $table = 'apartment';
    protected $guarded = [];

    public function campus()
    {
        return $this->belongsTo('App\Http\Entity\Campus');
    }

    public function rooms()
    {
        return $this->hasMany('App\Http\Entity\Room');
    }

    public static function getAll()
    {
        $campuses = Campus::getAll();
        $campusesId = [];

        foreach ($campuses as $campus) {
            array_push($campusesId, $campus->id);
        }

        $apartments = self::whereIn('campus_id', $campusesId)->get();

        return $apartments;
    }
}
