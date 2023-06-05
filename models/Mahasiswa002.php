<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa002".
 *
 * @property int $id002
 * @property string $nim002
 * @property string $nama002
 * @property string $kelas002
 * @property string $status002
 */
class Mahasiswa002 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa002';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim002', 'nama002', 'kelas002', 'status002'], 'required'],
            [['nim002'], 'string', 'max' => 25],
            [['nama002'], 'string', 'max' => 225],
            [['kelas002'], 'string', 'max' => 10],
            [['status002'], 'string', 'max' => 50],
            [['nim002'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id002' => 'Id002',
            'nim002' => 'Nim002',
            'nama002' => 'Nama002',
            'kelas002' => 'Kelas002',
            'status002' => 'Status002',
        ];
    }
}
