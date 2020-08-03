<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horarioficha;

/**
 * HorariofichaSearch represents the model behind the search form of `app\models\Horarioficha`.
 */
class HorariofichaSearch extends Horarioficha
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idhorarioficha', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja', 'idficha'], 'integer'],
            [['fechaInicial', 'diadelasemana', 'trimestre'], 'safe'],
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
        $query = Horarioficha::find();

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
            'idhorarioficha' => $this->idhorarioficha,
            'fechaInicial' => $this->fechaInicial,
            'idinstructor' => $this->idinstructor,
            'idcompetencia' => $this->idcompetencia,
            'idambiente' => $this->idambiente,
            'idfranja' => $this->idfranja,
            'idficha' => $this->idficha,
        ]);

        $query->andFilterWhere(['like', 'diadelasemana', $this->diadelasemana])
            ->andFilterWhere(['like', 'trimestre', $this->trimestre]);

        return $dataProvider;
    }
}
