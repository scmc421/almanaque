<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property int $idmatricula ID MATRICULA
 * @property int $idaprendiz ID APRENDIZ
 * @property int $idficha FICHA
 * @property string $fechamatricula FECHA DE MATRICULA
 * @property int $jornada JORNADA
 *
 * @property Aprendiz $idaprendiz0
 * @property Ficha $idficha0
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaprendiz', 'idficha', 'fechamatricula', 'jornada'], 'required'],
            [['idaprendiz', 'idficha', 'jornada'], 'integer'],
            [['fechamatricula'], 'safe'],
            [['idaprendiz'], 'exist', 'skipOnError' => true, 'targetClass' => Aprendiz::className(), 'targetAttribute' => ['idaprendiz' => 'idaprendiz']],
            [['idficha'], 'exist', 'skipOnError' => true, 'targetClass' => Ficha::className(), 'targetAttribute' => ['idficha' => 'idficha']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmatricula' => 'ID MATRICULA',
            'idaprendiz' => 'ID APRENDIZ',
            'idficha' => 'FICHA',
            'fechamatricula' => 'FECHA DE MATRICULA',
            'jornada' => 'JORNADA',
        ];
    }

    /**
     * Gets query for [[Idaprendiz0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdaprendiz0()
    {
        return $this->hasOne(Aprendiz::className(), ['idaprendiz' => 'idaprendiz']);
    }

    /**
     * Gets query for [[Idficha0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdficha0()
    {
        return $this->hasOne(Ficha::className(), ['idficha' => 'idficha']);
    }
}
