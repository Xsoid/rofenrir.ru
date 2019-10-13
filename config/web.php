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
                'profile' => 'site/profile',
                'account' => 'site/account',
                [
                    'class' => 'share\web\ViewUrlRule',
                    'defaultRoute' => 'site',
                ],
            ],
        ],
    ],
];

return $config;
