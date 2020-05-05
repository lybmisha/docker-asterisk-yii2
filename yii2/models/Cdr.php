<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cdr".
 *
 * @property int $id
 * @property string|null $accountcode
 * @property string|null $src
 * @property string|null $dst
 * @property string|null $dcontext
 * @property string|null $clid
 * @property string|null $channel
 * @property string|null $dstchannel
 * @property string|null $lastapp
 * @property string|null $lastdata
 * @property string|null $start
 * @property string|null $answer
 * @property string|null $end
 * @property int|null $duration
 * @property int|null $billsec
 * @property string|null $disposition
 * @property string|null $amaflags
 * @property string|null $userfield
 * @property string|null $uniqueid
 * @property string|null $linkedid
 * @property string|null $peeraccount
 * @property int|null $sequence
 */
class Cdr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cdr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start', 'answer', 'end'], 'safe'],
            [['duration', 'billsec', 'sequence'], 'integer'],
            [['accountcode', 'src', 'dst', 'dcontext', 'clid', 'channel', 'dstchannel', 'lastapp', 'lastdata', 'peeraccount'], 'string', 'max' => 80],
            [['disposition', 'amaflags'], 'string', 'max' => 45],
            [['userfield'], 'string', 'max' => 256],
            [['uniqueid', 'linkedid'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accountcode' => 'Accountcode',
            'src' => 'Src',
            'dst' => 'Dst',
            'dcontext' => 'Dcontext',
            'clid' => 'Clid',
            'channel' => 'Channel',
            'dstchannel' => 'Dstchannel',
            'lastapp' => 'Lastapp',
            'lastdata' => 'Lastdata',
            'start' => 'Start',
            'answer' => 'Answer',
            'end' => 'End',
            'duration' => 'Duration',
            'billsec' => 'Billsec',
            'disposition' => 'Disposition',
            'amaflags' => 'Amaflags',
            'userfield' => 'Userfield',
            'uniqueid' => 'Uniqueid',
            'linkedid' => 'Linkedid',
            'peeraccount' => 'Peeraccount',
            'sequence' => 'Sequence',
        ];
    }
}
