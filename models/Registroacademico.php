<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registroacademico".
 *
 * @property int $idaprendiz DOCUMENTO APRENDIZ
 * @property int $idcompetencia ID COMPETENCIA
 *
 * @property Aprendiz $idaprendiz0
 * @property Competencia $idcompetencia0
 */
class Registroacademico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registroacademico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaprendiz', 'idcompetencia'], 'required'],
            [['idaprendiz', 'idcompetencia'], 'integer'],
            [['idaprendiz', 'idcompetencia'], 'unique', 'targetAttribute' => ['idaprendiz', 'idcompetencia']],
            [['idaprendiz'], 'exist', 'skipOnError' => true, 'targetClass' => Aprendiz::className(), 'targetAttribute' => ['idaprendiz' => 'idaprendiz']],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idaprendiz' => 'DOCUMENTO APRENDIZ',
            'idcompetencia' => 'ID COMPETENCIA',
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
     * Gets query for [[Idcompetencia0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcompetencia0()
    {
        return $this->hasOne(Competencia::className(), ['idcompetencia' => 'idcompetencia']);
    }
}
