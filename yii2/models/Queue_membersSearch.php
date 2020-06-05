<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QueueMembers;

/**
 * Queue_membersSearch represents the model behind the search form of `app\models\QueueMembers`.
 */
class Queue_membersSearch extends QueueMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['queue_name', 'interface', 'membername', 'state_interface'], 'safe'],
            [['penalty', 'paused', 'uniqueid', 'wrapuptime'], 'integer'],
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
        $query = QueueMembers::find();

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
            'penalty' => $this->penalty,
            'paused' => $this->paused,
            'uniqueid' => $this->uniqueid,
            'wrapuptime' => $this->wrapuptime,
        ]);

        $query->andFilterWhere(['like', 'queue_name', $this->queue_name])
            ->andFilterWhere(['like', 'interface', $this->interface])
            ->andFilterWhere(['like', 'membername', $this->membername])
            ->andFilterWhere(['like', 'state_interface', $this->state_interface]);

        return $dataProvider;
    }
}
