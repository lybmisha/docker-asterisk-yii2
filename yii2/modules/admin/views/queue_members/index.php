<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Queue_membersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Queue Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queue-members-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Queue Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'queue_name',
            'interface',
            'membername',
            'state_interface',
            'penalty',
            //'paused',
            //'uniqueid',
            //'wrapuptime:datetime',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'Действия'],
        
        ],
    ]); ?>


</div>
