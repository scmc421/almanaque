<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dicta".
 *
 * @property int $idinstructor ID INSTRUCTOR
 * @property int $idcompetencia ID COMPETENCIA
 *
 * @property Competencia $idcompetencia0
 * @property Instructor $idinstructor0
 */
class Dicta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dicta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idinstructor', 'idcompetencia'], 'required'],
            [['idinstructor', 'idcompetencia'], 'integer'],
            [['idinstructor', 'idcompetencia'], 'unique', 'targetAttribute' => ['idinstructor', 'idcompetencia']],
            [['idcompetencia'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idcompetencia' => 'idcompetencia']],
            [['idinstructor'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['idinstructor' => 'idinstructor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idinstructor' => 'ID INSTRUCTOR',
            'idcompetencia' => 'ID COMPETENCIA',
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
     * Gets query for [[Idinstructor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdinstructor0()
    {
        return $this->hasOne(Instructor::className(), ['idinstructor' => 'idinstructor']);
    }
}
