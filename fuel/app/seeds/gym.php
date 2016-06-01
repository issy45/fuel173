<?php

$seeds = [
    [
        'name'       => '伏見東部地域体育館',
        'short_name' => '東部体育館',
        'address'    => '京都市伏見区醍醐辰巳町4番地の1',
        'tel'        => '075-573-5323',
        'link'       => 'http://www.kyoto-taiikukan.com/information/fushimitobu/index.html',
    ],
    [
        'name'       => '久世地域体育館',
        'short_name' => '久世体育館',
        'address'    => '京都市南区久世大築町36番地',
        'tel'        => '075-934-4317',
        'link'       => 'http://www.kyoto-taiikukan.com/information/kuze/index.html',
    ],
    [
        'name'       => '醍醐地域体育館',
        'short_name' => '醍醐体育館',
        'address'    => '京都市伏見区醍醐高畑町30番地1 パセオダイゴロー西館3階',
        'tel'        => '075-575-2582',
        'link'       => 'http://www.kyoto-taiikukan.com/information/daigo/index.html',
    ],
    [
        'name'       => '伏見北堀公園地域体育館',
        'short_name' => '北堀体育館',
        'address'    => '京都市伏見区深草大亀谷五郎太町23',
        'tel'        => '075-601-0700',
        'link'       => 'http://www.kyoto-taiikukan.com/information/fushimi/index.html',
    ],
    [
        'name'       => '東山地域体育館',
        'short_name' => '東山体育館',
        'address'    => '京都市東山区清水5-130-6 東山総合庁舎3階',
        'tel'        => '075-532-0474',
        'link'       => 'http://www.kyoto-taiikukan.com/information/higashiyama/index.html',
    ],
    [
        'name'       => '太陽の家',
        'short_name' => '太陽の家',
        'address'    => '京都市南区上鳥羽塔ノ森上河原37-2',
        'tel'        => '075-681-1380',
        'link'       => 'http://www.taiyonoie.or.jp/inquiry',
    ],
];

foreach ($seeds as $key => $seed) {
    $model = Model_Gym::forge($seed);
    $model->save();
}

        
        // '京都府立体育館',
        // 'テルサ体育館',
        // '西京極体育館',
        // '長岡スポーツ体育館',
        // '黄檗体育館',
        // '久御山体育館',
        // '西山体育館',