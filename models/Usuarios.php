<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $idusuario DOCUMENTO ID
 * @property string $nomusuario USUARIO
 * @property string $claveusuario CLAVE
 * @property string $rolusuario ROL
 *
 * @property Aprendiz[] $aprendizs
 * @property Instructor[] $instructors
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomusuario', 'claveusuario', 'rolusuario'], 'required'],
            [['nomusuario', 'rolusuario'], 'string', 'max' => 25],
            [['claveusuario'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'DOCUMENTO ID',
            'nomusuario' => 'USUARIO',
            'claveusuario' => 'CLAVE',
            'rolusuario' => 'ROL',
        ];
    }

    /**
     * Gets query for [[Aprendizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAprendizs()
    {
        return $this->hasMany(Aprendiz::className(), ['idusuario' => 'idusuario']);
    }

    /**
     * Gets query for [[Instructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstructors()
    {
        return $this->hasMany(Instructor::className(), ['idusuario' => 'idusuario']);
    }
}
