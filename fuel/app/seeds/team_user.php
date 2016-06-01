<?php

$auth = \Auth\Auth::instance('Myauth');

$seeds = [
    [
        'team_id'   => 1,
        'user_id'   => 1,
    ],
    [
        'team_id'   => 2,
        'user_id'   => 2,
    ],
    [
        'team_id'   => 1,
        'user_id'   => 2,
    ]
];

foreach ($seeds as $key => $seed) {
    $model = Model_Team_User::forge($seed);
    $model->save();
}
