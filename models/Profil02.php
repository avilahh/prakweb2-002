<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil02".
 *
 * @property int $Id
 * @property int $Id_mahasiswa
 * @property string $Foto_profil
 */
class Profil02 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil02';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_mahasiswa', 'Foto_profil'], 'required'],
            [['Id', 'Id_mahasiswa'], 'integer'],
            [['Foto_profil'], 'string', 'max' => 25],
            [['Id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_mahasiswa' => 'Id Mahasiswa',
            'Foto_profil' => 'Foto Profil',
        ];
    }



     /**
     * Gets query for [[Mahasiswa02]].
     * 
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa02()
    {
        return $this->hasOne(Mahasiswa02::class, ['Id_mahasiswa' =>'id']);
    }
}
