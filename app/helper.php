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

if (!function_exists('show_recommend_list')) {
    function show_recommend_list()
    {
        $ingredients = array(
            'カラシ',
            'カレー粉',
            'ごま油',
            'サラダ油',
            'しょうが',
            'ターメリック',
            'にんにく',
            '乾燥唐辛子',
            '卵白',
            '卵黄',
            '唐辛子',
            '塩',
            '牛乳',
            '玉ねぎ',
            '生唐辛子',
            '生姜',
            '白胡麻',
            '砂糖',
            '胡椒',
            '胡麻',
            '薄力粉',
            '蜂蜜',
            '豆',
            '酢',
            '醤油',
            '食用油',
            '麦粉',
            '黒コショウ',
            '黒胡麻'
          );

        $txt = '';
        foreach ($ingredients as $ingredient) {
            $txt .= '<option>' . $ingredient . '</option>';
        }

        return $txt;
    }
}
