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
    'container' => [
        'definitions' => [
            'yii\widgets\LinkPager' => [
                'options' => ['class' => 'btn-group', 'tag' => 'div'],
                'linkContainerOptions' => ['tag' => 'div'],
                'pageCssClass' => ['class' => 'btn btn-light'],
                'prevPageCssClass' => ['class' => 'prev btn btn-light'],
                'nextPageCssClass' => ['class' => 'next btn btn-light'],
            ],
        ],
    ]
];

return $config;
