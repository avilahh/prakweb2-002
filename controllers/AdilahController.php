<?php

namespace app\controllers;

class AdilahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAsistensi()
    {
        return $this->render('asistensi');
    }

}
