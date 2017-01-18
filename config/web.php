<?php

$config = [
    'components' => [
        'request' => [
            'scriptUrl' => 'index.php',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'login' => 'site/login',
                [
                    'class' => 'app\ext\ViewUrlRule',
                ],
            ],
        ],
    ],
];

return $config;
