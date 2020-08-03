<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programacompetencia".
 *
 * @property int $idprograma ID PROGRAMA
 * @property int $idcompetencia ID COMPETENCIA
 *
 * @property Competencia $idcompetencia0
 * @property Programa $idprograma0
 */
class Programacompetencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programacompetencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idprograma', 'idcompetencia'], 'required'],
            [['idprograma', 'idcompetencia'], 'integer'],
            [['idprograma', 'idcompetencia'], 'unique', 'targetAttribute' => ['idprograma', 'idcompetencia']],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
            [['idprograma'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['idprograma' => 'idprograma']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idprograma' => 'ID PROGRAMA',
            'idcompetencia' => 'ID COMPETENCIA',
        ];
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

    /**
     * Gets query for [[Idprograma0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdprograma0()
    {
        return $this->hasOne(Programa::className(), ['idprograma' => 'idprograma']);
    }
}
