<?php
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/local/params.php')
);

return [
    'id' => 'app-console',
    'bootstrap' => ['log'],
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'app\commands',
    'controllerMap' => [
        // 'serve' => array(
        //     'class' => 'yii\console\controllers\ServeController',
        //     'docroot' => '@web_app/web'
        // ),
        // 'add_admin' => 'app\commands\UserController',
    ],
    'components' => [
        'user' => [
            'class' => 'app\models\User',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];