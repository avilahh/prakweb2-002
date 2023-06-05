<?php

namespace app\controllers;

use app\models\Presensi;
use yii\data\ActiveDataProvider;

class PresensiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Presensi::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $Presensi = new Presensi;
        $Presensi->id = '10';
        $Presensi->id_mahasiswa = '12';
        $Presensi->tanggal_presensi = '2002-02-11';
        $Presensi->metode_pembelajaran = 'offline';
        if ($Presensi->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Presensi->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Presensi = Presensi::findOne($id);
        $Presensi->id_matakuliah = '12';
        if ($Presensi->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Presensi->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Presensi = Presensi::findOne($id);
        if ($Presensi->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Presensi->getErrors());
            die();
        }
    }

}