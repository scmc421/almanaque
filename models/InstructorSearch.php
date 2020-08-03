<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Instructor;

/**
 * InstructorSearch represents the model behind the search form of `app\models\Instructor`.
 */
class InstructorSearch extends Instructor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idinstructor', 'idusuario'], 'integer'],
            [['nom1instructor', 'nom2instructor', 'ape1instructor', 'ape2instructor', 'emailinstructor'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Instructor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idinstructor' => $this->idinstructor,
            'idusuario' => $this->idusuario,
        ]);

        $query->andFilterWhere(['like', 'nom1instructor', $this->nom1instructor])
            ->andFilterWhere(['like', 'nom2instructor', $this->nom2instructor])
            ->andFilterWhere(['like', 'ape1instructor', $this->ape1instructor])
            ->andFilterWhere(['like', 'ape2instructor', $this->ape2instructor])
            ->andFilterWhere(['like', 'emailinstructor', $this->emailinstructor]);

        return $dataProvider;
    }
}
