<?php

$auth = \Auth\Auth::instance('Myauth');

$seeds = [
    [
        'username' => 'ログイン名',
        'name'     => '表示名',
        'email'    => 'メールアドレス',
        'password' => $auth->hash_password('パスワード'),
    ],
];


$model_name = 'Model_'.ucfirst(substr(basename(__FILE__), 0, -4));
foreach ($seeds as $key => $seed) {
    $model = $model_name::forge($seed);
    $model->save();
}