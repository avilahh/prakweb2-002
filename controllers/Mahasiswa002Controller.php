<?php

namespace app\controllers;
use app\models\Mahasiswa002;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa002Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa002::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $mahasiswa002 = new Mahasiswa002;
        $mahasiswa002->nim002 = '60200121002-'.rand(10,99);
        $mahasiswa002->nama002 = 'Avilah';
        $mahasiswa002->kelas002 = 'A';
        $mahasiswa002->status002= 'Baru';
        if ($mahasiswa002->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa002->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswa002 = Mahasiswa002::findOne($id);
        if($mahasiswa002!== null){
            $mahasiswa002->kelas002 = 'C';
            $mahasiswa002->status002 = 'Update';
            $mahasiswa002->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }   
        return $this->redirect(['index']);

    }

    public function actionDelete($id)
    {
        $mahasiswa002 = Mahasiswa002::findOne($id);
        if ($mahasiswa002->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa002->getErrors());
            die();
        }
    }
    public function actionView($id)
    {
        $mahasiswa002 = Mahasiswa002::findOne($id);
        return $this->render('view', ['mahasiswa002' => $mahasiswa002]);
    }

}