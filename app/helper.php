<?php

if (!function_exists('convert_time')) {
    function convert_time($minutes)
    {
        if ($minutes > 60) {
            if ($minutes % 60 == 0) {
                return floor($minutes / 60) . '時間';
            } else {
                return floor($minutes / 60) . '時間' . floor($minutes % 60) . '分';
            }
        }

        return $minutes . '分';
    }
}
