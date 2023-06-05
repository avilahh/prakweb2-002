<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "presensi".
 *
 * @property int $id
 * @property int $id_matakuliah
 * @property string $tanggal_presensi
 * @property string $metode_pembelajaran
 */
class Presensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_matakuliah', 'tanggal_presensi', 'metode_pembelajaran'], 'required'],
            [['id_matakuliah'], 'integer'],
            [['tanggal_presensi'], 'string', 'max' => 5],
            [['metode_pembelajaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_matakuliah' => 'Id Matakuliah',
            'tanggal_presensi' => 'Tanggal Presensi',
            'metode_pembelajaran' => 'Metode Pembelajaran',
        ];
    }
}
