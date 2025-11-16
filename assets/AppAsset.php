<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'share\web\MasonryAsset', // каскадные сетки, расширение Bootstrap
        'share\web\FontAwesome5Asset', // иконки
        'share\web\MomentJsAsset',  // работа с датами
        'share\web\ImagesloadedAsset',  // отслеживание момента загрузки изображения
        'share\web\RpgidPlatform',  // общие CSS и JS платформы (оформление)
    ];
}
