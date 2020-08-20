<?php

$config = [
    'components' => [
        'urlManager' => [
            'rules' => [
                'login' => 'site/login',
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
