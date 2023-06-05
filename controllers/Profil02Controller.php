<?php

namespace app\controllers;
use app\models\Profil02;
use yii\data\ActiveDataProvider;

class Profil02Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil02::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
