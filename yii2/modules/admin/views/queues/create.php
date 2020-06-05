<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Queues */

$this->title = 'Create Queues';
$this->params['breadcrumbs'][] = ['label' => 'Queues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queues-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
