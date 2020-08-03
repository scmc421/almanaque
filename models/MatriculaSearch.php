<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matricula;

/**
 * MatriculaSearch represents the model behind the search form of `app\models\Matricula`.
 */

class MatriculaSearch extends Matricula
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmatricula', 'idaprendiz', 'idficha', 'jornada'], 'integer'],
            [['fechamatricula'], 'safe'],
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
        $query = Matricula::find();

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
            'idmatricula' => $this->idmatricula,
            'idaprendiz' => $this->idaprendiz,
            'idficha' => $this->idficha,
            'fechamatricula' => $this->fechamatricula,
            'jornada' => $this->jornada,
        ]);

        return $dataProvider;
    }
}
