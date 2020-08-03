<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resultado;

/**
 * ResultadoSearch represents the model behind the search form of `app\models\Resultado`.
 */
class ResultadoSearch extends Resultado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idresultado', 'idcompetencia'], 'integer'],
            [['nombreresultado'], 'safe'],
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
        $query = Resultado::find();

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
            'idresultado' => $this->idresultado,
            'idcompetencia' => $this->idcompetencia,
        ]);

        $query->andFilterWhere(['like', 'nombreresultado', $this->nombreresultado]);

        return $dataProvider;
    }
}
