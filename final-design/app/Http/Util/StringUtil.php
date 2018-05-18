<?php

namespace App\Http\Util;

class StringUtil
{
    /**
     * If the needed number < 10 add 0.
     *
     * @param Integer $num
     *
     * @return String
     */
    public static function addZero($num)
    {

        if ($num < 10) {
            $num = '0' . $num;
        }

        return $num;
    }
}