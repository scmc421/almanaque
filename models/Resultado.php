<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultado".
 *
 * @property int $idresultado ID RESULTADO
 * @property string $nombreresultado RESULTADO
 * @property int $idcompetencia ID COMPETENCIA
 *
 * @property Informeacademicofinal[] $informeacademicofinals
 * @property Competencia $idcompetencia0
 */
class Resultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resultado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idresultado', 'nombreresultado', 'idcompetencia'], 'required'],
            [['idresultado', 'idcompetencia'], 'integer'],
            [['nombreresultado'], 'string', 'max' => 45],
            [['idresultado'], 'unique'],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idresultado' => 'ID RESULTADO',
            'nombreresultado' => 'RESULTADO',
            'idcompetencia' => 'ID COMPETENCIA',
        ];
    }

    /**
     * Gets query for [[Informeacademicofinals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformeacademicofinals()
    {
        return $this->hasMany(Informeacademicofinal::className(), ['idresultado' => 'idresultado']);
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
