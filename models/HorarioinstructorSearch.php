<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horarioinstructor;

/**
 * HorarioinstructorSearch represents the model behind the search form of `app\models\Horarioinstructor`.
 */
class HorarioinstructorSearch extends Horarioinstructor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idhorario', 'idficha', 'idinstructor', 'idcompetencia', 'idambiente', 'idfranja'], 'integer'],
            [['fechainicial', 'diadelasemana', 'trimestre', 'aniohorario'], 'safe'],
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
        $query = Horarioinstructor::find();

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
            'idhorario' => $this->idhorario,
            'fechainicial' => $this->fechainicial,
            'idficha' => $this->idficha,
            'idinstructor' => $this->idinstructor,
            'idcompetencia' => $this->idcompetencia,
            'idambiente' => $this->idambiente,
            'idfranja' => $this->idfranja,
        ]);

        $query->andFilterWhere(['like', 'diadelasemana', $this->diadelasemana])
            ->andFilterWhere(['like', 'trimestre', $this->trimestre])
            ->andFilterWhere(['like', 'aniohorario', $this->aniohorario]);

        return $dataProvider;
    }
}
