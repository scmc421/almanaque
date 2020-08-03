<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competencia".
 *
 * @property int $idcompetencia ID COMPETENCIA
 * @property string $nomcompetencia NOMBRE COMPETENCIA
 * @property int $idprograma ID PROGRAMA
 *
 * @property Dicta[] $dictas
 * @property Instructor[] $idinstructors
 * @property Horarioficha[] $horariofichas
 * @property Horarioinstructor[] $horarioinstructors
 * @property Informeacademicofinal[] $informeacademicofinals
 * @property Programacompetencia[] $programacompetencias
 * @property Programa[] $idprogramas
 * @property Registroacademico[] $registroacademicos
 * @property Aprendiz[] $idaprendizs
 * @property Resultado[] $resultados
 */
class Competencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'competencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcompetencia', 'nomcompetencia', 'idprograma'], 'required'],
            [['idcompetencia', 'idprograma'], 'integer'],
            [['nomcompetencia'], 'string', 'max' => 125],
            [['idcompetencia'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcompetencia' => 'ID COMPETENCIA',
            'nomcompetencia' => 'NOMBRE COMPETENCIA',
            'idprograma' => 'ID PROGRAMA',
        ];
    }

    /**
     * Gets query for [[Dictas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDictas()
    {
        return $this->hasMany(Dicta::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Idinstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdinstructors()
    {
        return $this->hasMany(Instructor::className(), ['idinstructor' => 'idinstructor'])->viaTable('dicta', ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Horariofichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorariofichas()
    {
        return $this->hasMany(Horarioficha::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Horarioinstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioinstructors()
    {
        return $this->hasMany(Horarioinstructor::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Informeacademicofinals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformeacademicofinals()
    {
        return $this->hasMany(Informeacademicofinal::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Programacompetencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgramacompetencias()
    {
        return $this->hasMany(Programacompetencia::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Idprogramas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdprogramas()
    {
        return $this->hasMany(Programa::className(), ['idprograma' => 'idprograma'])->viaTable('programacompetencia', ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Registroacademicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistroacademicos()
    {
        return $this->hasMany(Registroacademico::className(), ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Idaprendizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdaprendizs()
    {
        return $this->hasMany(Aprendiz::className(), ['idaprendiz' => 'idaprendiz'])->viaTable('registroacademico', ['idcompetencia' => 'idcompetencia']);
    }

    /**
     * Gets query for [[Resultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::className(), ['idcompetencia' => 'idcompetencia']);
    }
}
