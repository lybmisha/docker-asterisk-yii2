<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queue_members".
 *
 * @property string $queue_name
 * @property string $interface
 * @property string|null $membername
 * @property string|null $state_interface
 * @property int|null $penalty
 * @property int|null $paused
 * @property int $uniqueid
 * @property int|null $wrapuptime
 */
class QueueMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'queue_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['queue_name', 'interface'], 'required'],
            [['penalty', 'paused', 'wrapuptime'], 'integer'],
            [['queue_name', 'interface', 'membername', 'state_interface'], 'string', 'max' => 80],
            [['queue_name', 'interface'], 'unique', 'targetAttribute' => ['queue_name', 'interface']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'queue_name' => 'Queue Name',
            'interface' => 'Interface',
            'membername' => 'Membername',
            'state_interface' => 'State Interface',
            'penalty' => 'Penalty',
            'paused' => 'Paused',
            'uniqueid' => 'Uniqueid',
            'wrapuptime' => 'Wrapuptime',
        ];
    }
}
