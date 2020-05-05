<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cdr;

/**
 * CdrSearch represents the model behind the search form of `app\models\Cdr`.
 */
class CdrSearch extends Cdr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'duration', 'billsec', 'sequence'], 'integer'],
            [['accountcode', 'src', 'dst', 'dcontext', 'clid', 'channel', 'dstchannel', 'lastapp', 'lastdata', 'start', 'answer', 'end', 'disposition', 'amaflags', 'userfield', 'uniqueid', 'linkedid', 'peeraccount'], 'safe'],
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
        $query = Cdr::find();

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
            'id' => $this->id,
            'start' => $this->start,
            'answer' => $this->answer,
            'end' => $this->end,
            'duration' => $this->duration,
            'billsec' => $this->billsec,
            'sequence' => $this->sequence,
        ]);

        $query->andFilterWhere(['like', 'accountcode', $this->accountcode])
            ->andFilterWhere(['like', 'src', $this->src])
            ->andFilterWhere(['like', 'dst', $this->dst])
            ->andFilterWhere(['like', 'dcontext', $this->dcontext])
            ->andFilterWhere(['like', 'clid', $this->clid])
            ->andFilterWhere(['like', 'channel', $this->channel])
            ->andFilterWhere(['like', 'dstchannel', $this->dstchannel])
            ->andFilterWhere(['like', 'lastapp', $this->lastapp])
            ->andFilterWhere(['like', 'lastdata', $this->lastdata])
            ->andFilterWhere(['like', 'disposition', $this->disposition])
            ->andFilterWhere(['like', 'amaflags', $this->amaflags])
            ->andFilterWhere(['like', 'userfield', $this->userfield])
            ->andFilterWhere(['like', 'uniqueid', $this->uniqueid])
            ->andFilterWhere(['like', 'linkedid', $this->linkedid])
            ->andFilterWhere(['like', 'peeraccount', $this->peeraccount]);

        return $dataProvider;
    }
}
