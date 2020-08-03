<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property int $idprograma CODIGO PROGRAMA
 * @property string $nomprograma NOMBRE PROGRAMA
 *
 * @property Ficha[] $fichas
 * @property ProgramaCompetencia[] $programaCompetencias
 * @property Competencia[] $idcompetencias
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idprograma', 'nomprograma'], 'required'],
            [['idprograma'], 'integer'],
            [['nomprograma'], 'string', 'max' => 45],
            [['idprograma'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idprograma' => 'CODIGO PROGRAMA',
            'nomprograma' => 'NOMBRE PROGRAMA',
        ];
    }

    /**
     * Gets query for [[Fichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFichas()
    {
        return $this->hasMany(Ficha::className(), ['idprograma' => 'idprograma']);
    }

    /**
     * Gets query for [[ProgramaCompetencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaCompetencias()
    {
        return $this->hasMany(ProgramaCompetencia::className(), ['idprograma' => 'idprograma']);
    }

    /**
     * Gets query for [[Idcompetencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcompetencias()
    {
        return $this->hasMany(Competencia::className(), ['idcompetencia' => 'idcompetencia'])->viaTable('programa-competencia', ['idprograma' => 'idprograma']);
    }
}
