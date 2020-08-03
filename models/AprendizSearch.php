<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aprendiz;

/**
 * AprendizSearch represents the model behind the search form of `app\models\Aprendiz`.
 */
class AprendizSearch extends Aprendiz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaprendiz', 'idusuario'], 'integer'],
            [['nom1aprendiz', 'nom2aprendiz', 'ape1aprendiz', 'ape2aprendiz', 'teleaprendiz', 'emailaprendiz'], 'safe'],
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
        $query = Aprendiz::find();

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
            'idaprendiz' => $this->idaprendiz,
            'idusuario' => $this->idusuario,
        ]);

        $query->andFilterWhere(['like', 'nom1aprendiz', $this->nom1aprendiz])
            ->andFilterWhere(['like', 'nom2aprendiz', $this->nom2aprendiz])
            ->andFilterWhere(['like', 'ape1aprendiz', $this->ape1aprendiz])
            ->andFilterWhere(['like', 'ape2aprendiz', $this->ape2aprendiz])
            ->andFilterWhere(['like', 'teleaprendiz', $this->teleaprendiz])
            ->andFilterWhere(['like', 'emailaprendiz', $this->emailaprendiz]);

        return $dataProvider;
    }
}
