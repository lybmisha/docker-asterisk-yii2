<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "extensions".
 *
 * @property int $id
 * @property string $context
 * @property string $exten
 * @property int $priority
 * @property string $app
 * @property string $appdata
 */
class Extensions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'extensions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['context', 'exten', 'priority', 'app', 'appdata'], 'required'],
            [['priority'], 'integer'],
            [['context', 'exten', 'app'], 'string', 'max' => 40],
            [['appdata'], 'string', 'max' => 256],
            [['context', 'exten', 'priority'], 'unique', 'targetAttribute' => ['context', 'exten', 'priority']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'context' => 'Context',
            'exten' => 'Exten',
            'priority' => 'Priority',
            'app' => 'App',
            'appdata' => 'Appdata',
        ];
    }
}
