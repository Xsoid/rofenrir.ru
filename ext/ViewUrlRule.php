<?php
namespace app\ext;

use Yii;
use yii\web\UrlRuleInterface;
use yii\base\Object;
use yii\helpers\StringHelper;

class ViewUrlRule extends Object implements UrlRuleInterface {

    public function createUrl($manager, $route, $params)
    {
        if ($route === 'site') {
            if (isset($params['view'])) {
                if (StringHelper::endsWith($params['view'], '/index')) {
                    return mb_substr($params['view'], 0, -strlen('index'), Yii::$app->charset);
                }
                elseif ($params['view'] == 'index') {
                    return '';
                }
                return $params['view'];
            } else {
                return '';
            }
        }
        return false;
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        $filePath = Yii::getAlias('@app/views/site/pages/'.$pathInfo.'.php');
        if (file_exists($filePath)) {
            return ['site/pages', ['view' => $pathInfo]];
        }
        $pathInfo .= 'index';
        $filePath = Yii::getAlias('@app/views/site/pages/'.$pathInfo.'.php');
        if (file_exists($filePath)) {
            return ['site/pages', ['view' => $pathInfo]];
        }
        return false;
    }

}