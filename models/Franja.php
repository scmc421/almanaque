<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "franja".
 *
 * @property int $idfranja
 * @property string $horainicial
 * @property string $horafinal
 *
 * @property HorarioInstructor[] $horarioInstructors
 * @property Horarioficha[] $horariofichas
 */
class Franja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'franja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idfranja', 'horainicial', 'horafinal'], 'required'],
            [['idfranja'], 'integer'],
            [['horainicial', 'horafinal'], 'safe'],
            [['idfranja'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idfranja' => 'Idfranja',
            'horainicial' => 'Horainicial',
            'horafinal' => 'Horafinal',
        ];
    }

    /**
     * Gets query for [[HorarioInstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioInstructors()
    {
        return $this->hasMany(HorarioInstructor::className(), ['idfranja' => 'idfranja']);
    }

    /**
     * Gets query for [[Horariofichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorariofichas()
    {
        return $this->hasMany(Horarioficha::className(), ['idfranja' => 'idfranja']);
    }
}
