<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horarioficha".
 *
 * @property int $idhorarioficha
 * @property string $fechaInicial
 * @property int $idinstructor
 * @property int $idcompetencia
 * @property int $idambiente
 * @property int $idfranja
 * @property int $idficha
 * @property string $diadelasemana
 * @property string $trimestre
 * @property string $aniohorario
 *
 * @property Competencia $idcompetencia0
 * @property Ficha $idficha0
 * @property Franja $idfranja0
 * @property Instructor $idinstructor0
 * @property Ambiente $idambiente0
 */
class Horarioaprendiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horarioficha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechaInicial', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'idficha', 'diadelasemana', 'trimestre', 'aniohorario'], 'required'],
            [['fechaInicial'], 'safe'],
            [['idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'idficha'], 'integer'],
            [['diadelasemana', 'trimestre', 'aniohorario'], 'string', 'max' => 45],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
            [['idficha'], 'exist', 'skipOnError' => true, 'targetClass' => Ficha::className(), 'targetAttribute' => ['idficha' => 'idficha']],
            [['idfranja'], 'exist', 'skipOnError' => true, 'targetClass' => Franja::className(), 'targetAttribute' => ['idfranja' => 'idfranja']],
            [['idinstructor'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['idinstructor' => 'idinstructor']],
            [['idambiente'], 'exist', 'skipOnError' => true, 'targetClass' => Ambiente::className(), 'targetAttribute' => ['idambiente' => 'idambiente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhorarioficha' => 'Idhorarioficha',
            'fechaInicial' => 'Fecha Inicial',
            'idinstructor' => 'Idinstructor',
            'idcompetencia' => 'Idcompetencia',
            'idambiente' => 'Idambiente',
            'idfranja' => 'Idfranja',
            'idficha' => 'Idficha',
            'diadelasemana' => 'Diadelasemana',
            'trimestre' => 'Trimestre',
            'aniohorario' => 'Aniohorario',
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
     * Gets query for [[Idficha0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdficha0()
    {
        return $this->hasOne(Ficha::className(), ['idficha' => 'idficha']);
    }

    /**
     * Gets query for [[Idfranja0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdfranja0()
    {
        return $this->hasOne(Franja::className(), ['idfranja' => 'idfranja']);
    }

    /**
     * Gets query for [[Idinstructor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdinstructor0()
    {
        return $this->hasOne(Instructor::className(), ['idinstructor' => 'idinstructor']);
    }

    /**
     * Gets query for [[Idambiente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdambiente0()
    {
        return $this->hasOne(Ambiente::className(), ['idambiente' => 'idambiente']);
    }
}
