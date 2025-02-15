<?php
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/local/params.php')
);

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'gmrpg-composer' . DIRECTORY_SEPARATOR . 'vendor',
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'components' => [
        'formatter' => [
            'dateFormat' => 'dd.MM.yyyy',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'RUB',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['admin', 'moderator', 'user'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
                'console*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'console' => 'console.php',
                    ],
                    
                ],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
 //       'mailer' => [
 //           'class' => 'yii\swiftmailer\Mailer',
 //           // send all mails to a file by default. You have to set
 //           // 'useFileTransport' to false and configure a transport
 //           // for the mailer to send real emails.
 //           'useFileTransport' => true,
 //       ],
        'user' => [
            // 'class' => 'app\models\User',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
    ],
    'params' => $params,
    'modules' => [
        'calendar' => [
            'class' => 'share\modules\calendar\CalendarModule',
        ],
        'library' => [
            'class' => 'share\modules\library\LibraryModule',
        ],
        'requisition' => [
            'class' => 'share\modules\requisition\RequisitionModule',
            'filterBySite' => true,
        ],
        'share-file' => [
            'class' => 'share\modules\share_file\ShareFileModule',
            'baseDir' => dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'static.rpgid.ru',
            'baseUrl' => 'https://static.rpgid.ru',
        ],
        'organization' => [
            'class' => 'share\modules\organization\OrganizationModule',
//            'viewPath' => '@app/views/organization',
        ],
        'project' => [
            'class' => 'share\modules\project\ProjectModule',
        ],
        'blog' => [
            'class' => 'share\modules\blog\BlogModule',
        ],
    ],
];

return $config;
