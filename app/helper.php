<?php

if (!function_exists('convert_time')) {
    function convert_time($minutes)
    {
        if ($minutes > 60) {
            return floor($minutes / 60) . '時' . floor($minutes % 60) . '分';
        } else if ($minutes == 60) {
            return '1時';
        }

        return $minutes . '分';
    }
}
