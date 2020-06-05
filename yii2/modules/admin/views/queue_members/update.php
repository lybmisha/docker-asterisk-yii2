<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QueueMembers */

$this->title = 'Update Queue Members: ' . $model->queue_name;
$this->params['breadcrumbs'][] = ['label' => 'Queue Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->queue_name, 'url' => ['view', 'queue_name' => $model->queue_name, 'interface' => $model->interface]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="queue-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
