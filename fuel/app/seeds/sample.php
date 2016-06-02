<?php

$seeds = [
    [
        'name' => 'サンプル',
    ],
    [
        'name' => 'サンプル',
    ],
];

foreach ($seeds as $key => $seed) {
    $model = Model_Sample::forge($seed);
    $model->save();
}