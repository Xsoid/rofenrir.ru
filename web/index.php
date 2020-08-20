<?php

// phpinfo();
// die();
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../gmrpg-composer/vendor/autoload.php');
require(__DIR__ . '/../../gmrpg-composer/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../gmrpg-composer/share/config/main.php'),
    require(__DIR__ . '/../../gmrpg-composer/share/config/local/main.php'),
    require(__DIR__ . '/../../gmrpg-composer/share/config/web.php'),
    require(__DIR__ . '/../../gmrpg-composer/share/config/local/web.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/local/main.php'),
    require(__DIR__ . '/../config/web.php'),
    require(__DIR__ . '/../config/local/web.php')
);
// var_dump($config);
(new yii\web\Application($config))->run();
