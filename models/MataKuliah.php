<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $id
 * @property string $kode_mk
 * @property string $nama_mk
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nama_mk'], 'required'],
            [['kode_mk', 'nama_mk'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'Kode Mk',
            'nama_mk' => 'Nama Mk',
        ];
    }
}
