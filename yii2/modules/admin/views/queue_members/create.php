<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QueueMembers */

$this->title = 'Create Queue Members';
$this->params['breadcrumbs'][] = ['label' => 'Queue Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queue-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
