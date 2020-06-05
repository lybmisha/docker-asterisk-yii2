<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queues".
 *
 * @property string $name
 * @property string|null $musiconhold
 * @property string|null $announce
 * @property string|null $context
 * @property int|null $timeout
 * @property string|null $ringinuse
 * @property string|null $setinterfacevar
 * @property string|null $setqueuevar
 * @property string|null $setqueueentryvar
 * @property string|null $monitor_format
 * @property string|null $membermacro
 * @property string|null $membergosub
 * @property string|null $queue_youarenext
 * @property string|null $queue_thereare
 * @property string|null $queue_callswaiting
 * @property string|null $queue_quantity1
 * @property string|null $queue_quantity2
 * @property string|null $queue_holdtime
 * @property string|null $queue_minutes
 * @property string|null $queue_minute
 * @property string|null $queue_seconds
 * @property string|null $queue_thankyou
 * @property string|null $queue_callerannounce
 * @property string|null $queue_reporthold
 * @property int|null $announce_frequency
 * @property string|null $announce_to_first_user
 * @property int|null $min_announce_frequency
 * @property int|null $announce_round_seconds
 * @property string|null $announce_holdtime
 * @property string|null $announce_position
 * @property int|null $announce_position_limit
 * @property string|null $periodic_announce
 * @property int|null $periodic_announce_frequency
 * @property string|null $relative_periodic_announce
 * @property string|null $random_periodic_announce
 * @property int|null $retry
 * @property int|null $wrapuptime
 * @property int|null $penaltymemberslimit
 * @property string|null $autofill
 * @property string|null $monitor_type
 * @property string|null $autopause
 * @property int|null $autopausedelay
 * @property string|null $autopausebusy
 * @property string|null $autopauseunavail
 * @property int|null $maxlen
 * @property int|null $servicelevel
 * @property string|null $strategy
 * @property string|null $joinempty
 * @property string|null $leavewhenempty
 * @property string|null $reportholdtime
 * @property int|null $memberdelay
 * @property int|null $weight
 * @property string|null $timeoutrestart
 * @property string|null $defaultrule
 * @property string|null $timeoutpriority
 */
class Queues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'queues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['timeout', 'announce_frequency', 'min_announce_frequency', 'announce_round_seconds', 'announce_position_limit', 'periodic_announce_frequency', 'retry', 'wrapuptime', 'penaltymemberslimit', 'autopausedelay', 'maxlen', 'servicelevel', 'memberdelay', 'weight'], 'integer'],
            [['ringinuse', 'setinterfacevar', 'setqueuevar', 'setqueueentryvar', 'announce_to_first_user', 'relative_periodic_announce', 'random_periodic_announce', 'autofill', 'autopause', 'autopausebusy', 'autopauseunavail', 'strategy', 'reportholdtime', 'timeoutrestart'], 'string'],
            [['name', 'musiconhold', 'announce', 'context', 'queue_youarenext', 'queue_thereare', 'queue_callswaiting', 'queue_quantity1', 'queue_quantity2', 'queue_holdtime', 'queue_minutes', 'queue_minute', 'queue_seconds', 'queue_thankyou', 'queue_callerannounce', 'queue_reporthold', 'announce_holdtime', 'announce_position', 'monitor_type', 'joinempty', 'leavewhenempty', 'defaultrule', 'timeoutpriority'], 'string', 'max' => 128],
            [['monitor_format'], 'string', 'max' => 8],
            [['membermacro', 'membergosub'], 'string', 'max' => 512],
            [['periodic_announce'], 'string', 'max' => 50],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'musiconhold' => 'Musiconhold',
            'announce' => 'Announce',
            'context' => 'Context',
            'timeout' => 'Timeout',
            'ringinuse' => 'Ringinuse',
            'setinterfacevar' => 'Setinterfacevar',
            'setqueuevar' => 'Setqueuevar',
            'setqueueentryvar' => 'Setqueueentryvar',
            'monitor_format' => 'Monitor Format',
            'membermacro' => 'Membermacro',
            'membergosub' => 'Membergosub',
            'queue_youarenext' => 'Queue Youarenext',
            'queue_thereare' => 'Queue Thereare',
            'queue_callswaiting' => 'Queue Callswaiting',
            'queue_quantity1' => 'Queue Quantity1',
            'queue_quantity2' => 'Queue Quantity2',
            'queue_holdtime' => 'Queue Holdtime',
            'queue_minutes' => 'Queue Minutes',
            'queue_minute' => 'Queue Minute',
            'queue_seconds' => 'Queue Seconds',
            'queue_thankyou' => 'Queue Thankyou',
            'queue_callerannounce' => 'Queue Callerannounce',
            'queue_reporthold' => 'Queue Reporthold',
            'announce_frequency' => 'Announce Frequency',
            'announce_to_first_user' => 'Announce To First User',
            'min_announce_frequency' => 'Min Announce Frequency',
            'announce_round_seconds' => 'Announce Round Seconds',
            'announce_holdtime' => 'Announce Holdtime',
            'announce_position' => 'Announce Position',
            'announce_position_limit' => 'Announce Position Limit',
            'periodic_announce' => 'Periodic Announce',
            'periodic_announce_frequency' => 'Periodic Announce Frequency',
            'relative_periodic_announce' => 'Relative Periodic Announce',
            'random_periodic_announce' => 'Random Periodic Announce',
            'retry' => 'Retry',
            'wrapuptime' => 'Wrapuptime',
            'penaltymemberslimit' => 'Penaltymemberslimit',
            'autofill' => 'Autofill',
            'monitor_type' => 'Monitor Type',
            'autopause' => 'Autopause',
            'autopausedelay' => 'Autopausedelay',
            'autopausebusy' => 'Autopausebusy',
            'autopauseunavail' => 'Autopauseunavail',
            'maxlen' => 'Maxlen',
            'servicelevel' => 'Servicelevel',
            'strategy' => 'Strategy',
            'joinempty' => 'Joinempty',
            'leavewhenempty' => 'Leavewhenempty',
            'reportholdtime' => 'Reportholdtime',
            'memberdelay' => 'Memberdelay',
            'weight' => 'Weight',
            'timeoutrestart' => 'Timeoutrestart',
            'defaultrule' => 'Defaultrule',
            'timeoutpriority' => 'Timeoutpriority',
        ];
    }
}
