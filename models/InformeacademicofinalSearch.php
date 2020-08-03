<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Informeacademicofinal;

/**
 * InformeacademicofinalSearch represents the model behind the search form of `app\models\Informeacademicofinal`.
 */
class InformeacademicofinalSearch extends Informeacademicofinal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idinformeacademico', 'idaprendiz', 'idcompetencia', 'idinstrutor', 'idresultado', 'trimestre', 'fallasinjustificadas', 'fallasjustificadas', 'nota1', 'nota2', 'nota3', 'estado'], 'integer'],
            [['fechainformefinal'], 'safe'],
            [['promedio'], 'number'],
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
        $query = Informeacademicofinal::find();

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
            'idinformeacademico' => $this->idinformeacademico,
            'idaprendiz' => $this->idaprendiz,
            'idcompetencia' => $this->idcompetencia,
            'idinstrutor' => $this->idinstrutor,
            'idresultado' => $this->idresultado,
            'fechainformefinal' => $this->fechainformefinal,
            'trimestre' => $this->trimestre,
            'fallasinjustificadas' => $this->fallasinjustificadas,
            'fallasjustificadas' => $this->fallasjustificadas,
            'nota1' => $this->nota1,
            'nota2' => $this->nota2,
            'nota3' => $this->nota3,
            'promedio' => $this->promedio,
            'estado' => $this->estado,
        ]);

        return $dataProvider;
    }
}
