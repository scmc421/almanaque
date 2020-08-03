<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informeacademicofinal".
 *
 * @property int $idinformeacademico ID INFORME FINAL
 * @property int $idaprendiz DOCUMENTO APRENDIZ
 * @property int $idcompetencia ID COMPETENCIA
 * @property int $idinstrutor DOCUMENTO ID INSTRUCTOR
 * @property int $idresultado ID RESULTADO
 * @property string $fechainformefinal FECHA INFORME FINAL
 * @property int $trimestre TRIMESTRE
 * @property int $fallasinjustificadas FALLAS SIN JUSTIFICAR
 * @property int $fallasjustificadas FALLAS JUSTIFICADAS
 * @property int $nota1 NOTA 1
 * @property int $nota2 NOTA 2
 * @property int $nota3 NOTA 3
 * @property float $promedio PROMEDIO
 * @property int $estado ESTADO
 *
 * @property Aprendiz $idaprendiz0
 * @property Competencia $idcompetencia0
 * @property Instructor $idinstrutor0
 * @property Resultado $idresultado0
 */
class Informeacademicofinal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informeacademicofinal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idinformeacademico', 'idaprendiz', 'idcompetencia', 'idinstrutor', 'idresultado', 'fechainformefinal', 'trimestre', 'fallasinjustificadas', 'fallasjustificadas', 'nota1', 'nota2', 'nota3', 'promedio', 'estado'], 'required'],
            [['idinformeacademico', 'idaprendiz', 'idcompetencia', 'idinstrutor', 'idresultado', 'trimestre', 'fallasinjustificadas', 'fallasjustificadas', 'nota1', 'nota2', 'nota3', 'estado'], 'integer'],
            [['fechainformefinal'], 'safe'],
            [['promedio'], 'number'],
            [['idinformeacademico'], 'unique'],
            [['idaprendiz'], 'exist', 'skipOnError' => true, 'targetClass' => Aprendiz::className(), 'targetAttribute' => ['idaprendiz' => 'idaprendiz']],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
            [['idinstrutor'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['idinstrutor' => 'idinstructor']],
            [['idresultado'], 'exist', 'skipOnError' => true, 'targetClass' => Resultado::className(), 'targetAttribute' => ['idresultado' => 'idresultado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idinformeacademico' => 'ID INFORME FINAL',
            'idaprendiz' => 'DOCUMENTO APRENDIZ',
            'idcompetencia' => 'ID COMPETENCIA',
            'idinstrutor' => 'DOCUMENTO ID INSTRUCTOR',
            'idresultado' => 'ID RESULTADO',
            'fechainformefinal' => 'FECHA INFORME FINAL',
            'trimestre' => 'TRIMESTRE',
            'fallasinjustificadas' => 'FALLAS SIN JUSTIFICAR',
            'fallasjustificadas' => 'FALLAS JUSTIFICADAS',
            'nota1' => 'NOTA 1',
            'nota2' => 'NOTA 2',
            'nota3' => 'NOTA 3',
            'promedio' => 'PROMEDIO',
            'estado' => 'ESTADO',
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

    /**
     * Gets query for [[Idinstrutor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdinstrutor0()
    {
        return $this->hasOne(Instructor::className(), ['idinstructor' => 'idinstrutor']);
    }

    /**
     * Gets query for [[Idresultado0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdresultado0()
    {
        return $this->hasOne(Resultado::className(), ['idresultado' => 'idresultado']);
    }
}
