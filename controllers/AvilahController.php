<?php

namespace app\controllers;

class AvilahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionKelasc()
    {
        return $this->render('kelasc');
    }

}
