<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blocktasks;

/**
 * BlocktasksSearch represents the model behind the search form of `app\models\Blocktasks`.
 */
class BlocktasksSearch extends Blocktasks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEntry', 'numberBlock'], 'integer'],
            [['Task'], 'safe'],
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
        $query = Blocktasks::find();

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
            'idEntry' => $this->idEntry,
            'numberBlock' => $this->numberBlock,
        ]);

        $query->andFilterWhere(['like', 'Task', $this->Task]);

        return $dataProvider;
    }
}
