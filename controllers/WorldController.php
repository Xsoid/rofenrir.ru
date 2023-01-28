<?php

namespace app\controllers;

use Yii;
use app\models\CharSearch;
use app\models\GuildSearch;

class WorldController extends \yii\web\Controller
{
    public function actionChar()
    {
        $searchModel = new CharSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('char', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

     public function actionGuild()
    {
        $searchModel = new GuildSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('guild', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
