<?php

$config = [
    'components' => [
        'request' => [
            'scriptUrl' => 'index.php',
            // !!! вставьте секретный ключ cookieValidationKey (если он пустой) - это требуется для проверки файлов cookie должен быть уникальным для каждого проекта
            'cookieValidationKey' => 'larpSERMA357rpg',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'login' => 'site/login',
                'robots.txt' => 'site/robots',
                [
                    'class' => 'share\web\ViewUrlRule',
                ],
            ],
        ],
    ],
];

return $config;
