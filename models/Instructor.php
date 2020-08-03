<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property int $idinstructor DOCUMENTO ID
 * @property string $nom1instructor PRIMER NOMBRE
 * @property string $nom2instructor SEGUNDO NOMBRE
 * @property string $ape1instructor PRIMER APELLIDO
 * @property string $ape2instructor SEGUNDO APELLIDO
 * @property string $emailinstructor EMAIL
 * @property int $idusuario ID USUARIO
 *
 * @property Dicta[] $dictas
 * @property Competencia[] $idcompetencias
 * @property Horarioficha[] $horariofichas
 * @property Horarioinstructor[] $horarioinstructors
 * @property Informeacademicofinal[] $informeacademicofinals
 * @property Usuarios $idusuario0
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idinstructor', 'nom1instructor', 'nom2instructor', 'ape1instructor', 'ape2instructor', 'emailinstructor', 'idusuario'], 'required'],
            [['idinstructor', 'idusuario'], 'integer'],
            [['nom1instructor', 'nom2instructor', 'ape1instructor', 'ape2instructor', 'emailinstructor'], 'string', 'max' => 45],
            [['idinstructor'], 'unique'],
            [['idusuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['idusuario' => 'idusuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idinstructor' => 'DOCUMENTO ID',
            'nom1instructor' => 'PRIMER NOMBRE',
            'nom2instructor' => 'SEGUNDO NOMBRE',
            'ape1instructor' => 'PRIMER APELLIDO',
            'ape2instructor' => 'SEGUNDO APELLIDO',
            'emailinstructor' => 'EMAIL',
            'idusuario' => 'ID USUARIO',
        ];
    }

    /**
     * Gets query for [[Dictas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDictas()
    {
        return $this->hasMany(Dicta::className(), ['idinstructor' => 'idinstructor']);
    }

    /**
     * Gets query for [[Idcompetencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcompetencias()
    {
        return $this->hasMany(Competencia::className(), ['idcompetencia' => 'idcompetencia'])->viaTable('dicta', ['idinstructor' => 'idinstructor']);
    }

    /**
     * Gets query for [[Horariofichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorariofichas()
    {
        return $this->hasMany(Horarioficha::className(), ['idinstructor' => 'idinstructor']);
    }

    /**
     * Gets query for [[Horarioinstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioinstructors()
    {
        return $this->hasMany(Horarioinstructor::className(), ['idinstructor' => 'idinstructor']);
    }

    /**
     * Gets query for [[Informeacademicofinals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformeacademicofinals()
    {
        return $this->hasMany(Informeacademicofinal::className(), ['idinstrutor' => 'idinstructor']);
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
}
