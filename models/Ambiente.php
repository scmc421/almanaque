<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ambiente".
 *
 * @property int $idambiente COD. AMBIENTE
 * @property string $nomambiente NOMBRE AMBIENTE
 *
 * @property Horarioficha[] $horariofichas
 * @property Horarioinstructor[] $horarioinstructors
 */
class Ambiente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ambiente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomambiente'], 'required'],
            [['nomambiente'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idambiente' => 'COD. AMBIENTE',
            'nomambiente' => 'NOMBRE AMBIENTE',
        ];
    }

    /**
     * Gets query for [[Horariofichas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorariofichas()
    {
        return $this->hasMany(Horarioficha::className(), ['idambiente' => 'idambiente']);
    }

    /**
     * Gets query for [[Horarioinstructors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioinstructors()
    {
        return $this->hasMany(Horarioinstructor::className(), ['idambiente' => 'idambiente']);
    }
}
