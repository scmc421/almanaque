<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horarioinstructor".
 *
 * @property int $idhorario ID HORARIO INSTRUCCTOR
 * @property string $fechainicial FECHA INICIAL
 * @property int $idficha ID FICHA
 * @property int $idinstructor DOCUMENTO ID INSTRUCTOR
 * @property int $idcompetencia ID COMPETENCIA
 * @property int $idambiente ID AMBIENTE
 * @property int $idfranja ID FRANJA
 * @property string $diadelasemana DIA DE LA SEMANA
 * @property string $trimestre TRIMESTRE
 * @property string $aniohorario AÑO DEL HORARIO
 *
 * @property Competencia $idcompetencia0
 * @property Ficha $idficha0
 * @property Franja $idfranja0
 * @property Instructor $idinstructor0
 * @property Ambiente $idambiente0
 */
class Horarioinstructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horarioinstructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechainicial', 'idficha', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'diadelasemana', 'trimestre', 'aniohorario'], 'required'],
            [['fechainicial'], 'safe'],
            [['idficha', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja'], 'integer'],
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
            'idhorario' => 'ID HORARIO INSTRUCCTOR',
            'fechainicial' => 'FECHA INICIAL',
            'idficha' => 'ID FICHA',
            'idinstructor' => 'DOCUMENTO ID INSTRUCTOR',
            'idcompetencia' => 'ID COMPETENCIA',
            'idambiente' => 'ID AMBIENTE',
            'idfranja' => 'ID FRANJA',
            'diadelasemana' => 'DIA DE LA SEMANA',
            'trimestre' => 'TRIMESTRE',
            'aniohorario' => 'AÑO DEL HORARIO',
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
