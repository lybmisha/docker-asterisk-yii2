<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Queues;

/**
 * QueuesSearch represents the model behind the search form of `app\models\Queues`.
 */
class QueuesSearch extends Queues
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'musiconhold', 'announce', 'context', 'ringinuse', 'setinterfacevar', 'setqueuevar', 'setqueueentryvar', 'monitor_format', 'membermacro', 'membergosub', 'queue_youarenext', 'queue_thereare', 'queue_callswaiting', 'queue_quantity1', 'queue_quantity2', 'queue_holdtime', 'queue_minutes', 'queue_minute', 'queue_seconds', 'queue_thankyou', 'queue_callerannounce', 'queue_reporthold', 'announce_to_first_user', 'announce_holdtime', 'announce_position', 'periodic_announce', 'relative_periodic_announce', 'random_periodic_announce', 'autofill', 'monitor_type', 'autopause', 'autopausebusy', 'autopauseunavail', 'strategy', 'joinempty', 'leavewhenempty', 'reportholdtime', 'timeoutrestart', 'defaultrule', 'timeoutpriority'], 'safe'],
            [['timeout', 'announce_frequency', 'min_announce_frequency', 'announce_round_seconds', 'announce_position_limit', 'periodic_announce_frequency', 'retry', 'wrapuptime', 'penaltymemberslimit', 'autopausedelay', 'maxlen', 'servicelevel', 'memberdelay', 'weight'], 'integer'],
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
        $query = Queues::find();

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
            'timeout' => $this->timeout,
            'announce_frequency' => $this->announce_frequency,
            'min_announce_frequency' => $this->min_announce_frequency,
            'announce_round_seconds' => $this->announce_round_seconds,
            'announce_position_limit' => $this->announce_position_limit,
            'periodic_announce_frequency' => $this->periodic_announce_frequency,
            'retry' => $this->retry,
            'wrapuptime' => $this->wrapuptime,
            'penaltymemberslimit' => $this->penaltymemberslimit,
            'autopausedelay' => $this->autopausedelay,
            'maxlen' => $this->maxlen,
            'servicelevel' => $this->servicelevel,
            'memberdelay' => $this->memberdelay,
            'weight' => $this->weight,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'musiconhold', $this->musiconhold])
            ->andFilterWhere(['like', 'announce', $this->announce])
            ->andFilterWhere(['like', 'context', $this->context])
            ->andFilterWhere(['like', 'ringinuse', $this->ringinuse])
            ->andFilterWhere(['like', 'setinterfacevar', $this->setinterfacevar])
            ->andFilterWhere(['like', 'setqueuevar', $this->setqueuevar])
            ->andFilterWhere(['like', 'setqueueentryvar', $this->setqueueentryvar])
            ->andFilterWhere(['like', 'monitor_format', $this->monitor_format])
            ->andFilterWhere(['like', 'membermacro', $this->membermacro])
            ->andFilterWhere(['like', 'membergosub', $this->membergosub])
            ->andFilterWhere(['like', 'queue_youarenext', $this->queue_youarenext])
            ->andFilterWhere(['like', 'queue_thereare', $this->queue_thereare])
            ->andFilterWhere(['like', 'queue_callswaiting', $this->queue_callswaiting])
            ->andFilterWhere(['like', 'queue_quantity1', $this->queue_quantity1])
            ->andFilterWhere(['like', 'queue_quantity2', $this->queue_quantity2])
            ->andFilterWhere(['like', 'queue_holdtime', $this->queue_holdtime])
            ->andFilterWhere(['like', 'queue_minutes', $this->queue_minutes])
            ->andFilterWhere(['like', 'queue_minute', $this->queue_minute])
            ->andFilterWhere(['like', 'queue_seconds', $this->queue_seconds])
            ->andFilterWhere(['like', 'queue_thankyou', $this->queue_thankyou])
            ->andFilterWhere(['like', 'queue_callerannounce', $this->queue_callerannounce])
            ->andFilterWhere(['like', 'queue_reporthold', $this->queue_reporthold])
            ->andFilterWhere(['like', 'announce_to_first_user', $this->announce_to_first_user])
            ->andFilterWhere(['like', 'announce_holdtime', $this->announce_holdtime])
            ->andFilterWhere(['like', 'announce_position', $this->announce_position])
            ->andFilterWhere(['like', 'periodic_announce', $this->periodic_announce])
            ->andFilterWhere(['like', 'relative_periodic_announce', $this->relative_periodic_announce])
            ->andFilterWhere(['like', 'random_periodic_announce', $this->random_periodic_announce])
            ->andFilterWhere(['like', 'autofill', $this->autofill])
            ->andFilterWhere(['like', 'monitor_type', $this->monitor_type])
            ->andFilterWhere(['like', 'autopause', $this->autopause])
            ->andFilterWhere(['like', 'autopausebusy', $this->autopausebusy])
            ->andFilterWhere(['like', 'autopauseunavail', $this->autopauseunavail])
            ->andFilterWhere(['like', 'strategy', $this->strategy])
            ->andFilterWhere(['like', 'joinempty', $this->joinempty])
            ->andFilterWhere(['like', 'leavewhenempty', $this->leavewhenempty])
            ->andFilterWhere(['like', 'reportholdtime', $this->reportholdtime])
            ->andFilterWhere(['like', 'timeoutrestart', $this->timeoutrestart])
            ->andFilterWhere(['like', 'defaultrule', $this->defaultrule])
            ->andFilterWhere(['like', 'timeoutpriority', $this->timeoutpriority]);

        return $dataProvider;
    }
}
