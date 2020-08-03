<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horarioficha".
 *
 * @property int $idhorarioficha COD HORARIO FICHA
 * @property string $fechaInicial FECHA INICIAL
 * @property int $idinstructor INSTRUCTOR
 * @property int $idcompetencia COMPETENCIA
 * @property int $idambiente AMBIENTE
 * @property int $idfranja FRANJA
 * @property int $idficha FICHA
 * @property string $diadelasemana DIA DE LA SEMANA
 * @property string $trimestre TRIMESTRE
 *
 * @property Competencia $idcompetencia0
 * @property Ficha $idficha0
 * @property Franja $idfranja0
 * @property Instructor $idinstructor0
 * @property Ambiente $idambiente0
 */
class Horarioficha extends \yii\db\ActiveRecord
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
            [['fechaInicial', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'idficha', 'diadelasemana', 'trimestre'], 'required'],
            [['fechaInicial'], 'safe'],
            [['idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'idficha'], 'integer'],
            [['diadelasemana', 'trimestre'], 'string', 'max' => 45],
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
            'idhorarioficha' => 'COD HORARIO FICHA',
            'fechaInicial' => 'FECHA INICIAL',
            'idinstructor' => 'INSTRUCTOR',
            'idcompetencia' => 'COMPETENCIA',
            'idambiente' => 'AMBIENTE',
            'idfranja' => 'FRANJA',
            'idficha' => 'FICHA',
            'diadelasemana' => 'DIA DE LA SEMANA',
            'trimestre' => 'TRIMESTRE',
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
