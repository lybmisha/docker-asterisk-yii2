<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QueueMembers */

$this->title = $model->queue_name;
$this->params['breadcrumbs'][] = ['label' => 'Queue Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="queue-members-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'queue_name' => $model->queue_name, 'interface' => $model->interface], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'queue_name' => $model->queue_name, 'interface' => $model->interface], [
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
            'queue_name',
            'interface',
            'membername',
            'state_interface',
            'penalty',
            'paused',
            'uniqueid',
            'wrapuptime:datetime',
        ],
    ]) ?>

</div>
