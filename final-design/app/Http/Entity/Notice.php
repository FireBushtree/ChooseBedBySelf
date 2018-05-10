<?php

namespace App\Http\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use SoftDeletes;

    protected $table = 'notice';
    protected $dates = ['begin_at', 'end_at', 'deleted_at'];
    protected $guarded = [];

    public function getBeginAtAttribute($value)
    {
        $value = date('Y-m-d', strtotime($value));

        if ($value == '1970-01-01') {
            return 'Not set';
        }

        return $value;
    }

    public function getEndAtAttribute($value)
    {
        $value = date('Y-m-d', strtotime($value));

        if ($value == '1970-01-01') {
            return 'Not set';
        }

        return $value;
    }
}
