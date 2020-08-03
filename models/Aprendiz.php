<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aprendiz".
 *
 * @property int $idaprendiz DOCUMENTO ID
 * @property string $nom1aprendiz PRIMER NOMBRE
 * @property string $nom2aprendiz SEGUNDO NOMBRE
 * @property string $ape1aprendiz PRIMER APELLIDO
 * @property string $ape2aprendiz SEGUNDO APELLIDO
 * @property string $teleaprendiz CELULAR O FIJO
 * @property string $emailaprendiz EMAIL
 * @property int $idusuario
 *
 * @property Usuarios $idusuario0
 * @property InformeAcademicoFinal[] $informeAcademicoFinals
 * @property Inscribe[] $inscribes
 * @property Competencia[] $idcompetencias
 */
class Aprendiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aprendiz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaprendiz', 'nom1aprendiz', 'nom2aprendiz', 'ape1aprendiz', 'ape2aprendiz', 'teleaprendiz', 'emailaprendiz', 'idusuario'], 'required'],
            [['idaprendiz', 'idusuario'], 'integer'],
            [['nom1aprendiz', 'nom2aprendiz', 'ape1aprendiz', 'ape2aprendiz', 'teleaprendiz', 'emailaprendiz'], 'string', 'max' => 25],
            [['idaprendiz'], 'unique'],
            [['idusuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['idusuario' => 'idusuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idaprendiz' => 'DOCUMENTO ID',
            'nom1aprendiz' => 'PRIMER NOMBRE',
            'nom2aprendiz' => 'SEGUNDO NOMBRE',
            'ape1aprendiz' => 'PRIMER APELLIDO',
            'ape2aprendiz' => 'SEGUNDO APELLIDO',
            'teleaprendiz' => 'CELULAR O FIJO',
            'emailaprendiz' => 'EMAIL',
            'idusuario' => 'Idusuario',
        ];
    }

    /**
     * Gets query for [[Idusuario0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdusuario0()
    {
        return $this->hasOne(Usuarios::className(), ['idusuario' => 'idusuario']);
    }

    /**
     * Gets query for [[InformeAcademicoFinals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformeAcademicoFinals()
    {
        return $this->hasMany(InformeAcademicoFinal::className(), ['idaprendiz' => 'idaprendiz']);
    }

    /**
     * Gets query for [[Inscribes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['idaprendiz' => 'idaprendiz']);
    }

    /**
     * Gets query for [[Idcompetencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcompetencias()
    {
        return $this->hasMany(Competencia::className(), ['idcompetencia' => 'idcompetencia'])->viaTable('inscribe', ['idaprendiz' => 'idaprendiz']);
    }
}
