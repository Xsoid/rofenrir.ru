<?php
$items = [
    'moderator' => [
        'type' => 1,
        'description' => 'Модератор',
        'ruleName' => 'userRpgidGroup',
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Администратор',
        'ruleName' => 'userRpgidGroup',
        'children' => [
            'moderator',
        ],
    ],
    'user' => [
        'type' => 1,
        'description' => 'Пользователь',
    ],
];

require_once(Yii::getAlias('@share/rbac/helper.php'));
$items = extendWithModuleRbacFileItems($items, 'items');

return $items;