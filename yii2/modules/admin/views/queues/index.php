<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QueuesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Queues';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queues-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Queues', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'musiconhold',
            'announce',
            'context',
            'timeout:datetime',
            //'ringinuse',
            //'setinterfacevar',
            //'setqueuevar',
            //'setqueueentryvar',
            //'monitor_format',
            //'membermacro',
            //'membergosub',
            //'queue_youarenext',
            //'queue_thereare',
            //'queue_callswaiting',
            //'queue_quantity1',
            //'queue_quantity2',
            //'queue_holdtime',
            //'queue_minutes',
            //'queue_minute',
            //'queue_seconds',
            //'queue_thankyou',
            //'queue_callerannounce',
            //'queue_reporthold',
            //'announce_frequency',
            //'announce_to_first_user',
            //'min_announce_frequency',
            //'announce_round_seconds',
            //'announce_holdtime',
            //'announce_position',
            //'announce_position_limit',
            //'periodic_announce',
            //'periodic_announce_frequency',
            //'relative_periodic_announce',
            //'random_periodic_announce',
            //'retry',
            //'wrapuptime:datetime',
            //'penaltymemberslimit',
            //'autofill',
            //'monitor_type',
            //'autopause',
            //'autopausedelay',
            //'autopausebusy',
            //'autopauseunavail',
            //'maxlen',
            //'servicelevel',
            //'strategy',
            //'joinempty',
            //'leavewhenempty',
            //'reportholdtime',
            //'memberdelay',
            //'weight',
            //'timeoutrestart',
            //'defaultrule',
            //'timeoutpriority',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'Действия'],
        ],
    ]); ?>


</div>
