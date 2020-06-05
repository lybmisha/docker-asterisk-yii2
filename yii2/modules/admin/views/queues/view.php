<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Queues */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Queues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="queues-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'musiconhold',
            'announce',
            'context',
            'timeout:datetime',
            'ringinuse',
            'setinterfacevar',
            'setqueuevar',
            'setqueueentryvar',
            'monitor_format',
            'membermacro',
            'membergosub',
            'queue_youarenext',
            'queue_thereare',
            'queue_callswaiting',
            'queue_quantity1',
            'queue_quantity2',
            'queue_holdtime',
            'queue_minutes',
            'queue_minute',
            'queue_seconds',
            'queue_thankyou',
            'queue_callerannounce',
            'queue_reporthold',
            'announce_frequency',
            'announce_to_first_user',
            'min_announce_frequency',
            'announce_round_seconds',
            'announce_holdtime',
            'announce_position',
            'announce_position_limit',
            'periodic_announce',
            'periodic_announce_frequency',
            'relative_periodic_announce',
            'random_periodic_announce',
            'retry',
            'wrapuptime:datetime',
            'penaltymemberslimit',
            'autofill',
            'monitor_type',
            'autopause',
            'autopausedelay',
            'autopausebusy',
            'autopauseunavail',
            'maxlen',
            'servicelevel',
            'strategy',
            'joinempty',
            'leavewhenempty',
            'reportholdtime',
            'memberdelay',
            'weight',
            'timeoutrestart',
            'defaultrule',
            'timeoutpriority',
        ],
    ]) ?>

</div>
