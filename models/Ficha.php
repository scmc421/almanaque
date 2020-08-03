<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ficha".
 *
 * @property int $idficha
 * @property string $fechadeinicio
 * @property int $idprograma
 *
 * @property Programa $idprograma0
 * @property HorarioInstructor[] $horarioInstructors
 * @property Horarioficha[] $horariofichas
 */
class Ficha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ficha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idficha', 'fechadeinicio', 'idprograma'], 'required'],
            [['idficha', 'idprograma'], 'integer'],
            [['fechadeinicio'], 'string', 'max' => 45],
            [['idficha'], 'unique'],
            [['idprograma'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['idprograma' => 'idprograma']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idficha' => 'Idficha',
            'fechadeinicio' => 'Fechadeinicio',
            'idprograma' => 'Idprograma',
        ];
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

    /**
     * Gets query for [[HorarioInstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioInstructors()
    {
        return $this->hasMany(HorarioInstructor::className(), ['idficha' => 'idficha']);
    }

    /**
     * Gets query for [[Horariofichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorariofichas()
    {
        return $this->hasMany(Horarioficha::className(), ['idficha' => 'idficha']);
    }
}
