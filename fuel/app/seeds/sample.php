<?php

$seeds = [
    [
        'name' => 'サンプル',
    ],
    [
        'name' => 'サンプル',
    ],
];

$model_name = 'Model_'.ucfirst(substr(basename(__FILE__), 0, -4));
foreach ($seeds as $key => $seed) {
    $model = $model_name::forge($seed);
    $model->save();
}