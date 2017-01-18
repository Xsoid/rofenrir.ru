<?php
return [
    'moderator' => [
        'type' => 1,
        'description' => 'Модератор',
        'ruleName' => 'userGroup',
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Администратор сайта',
        'ruleName' => 'userGroup',
        'children' => [
            'moderator',
        ],
    ],
];
