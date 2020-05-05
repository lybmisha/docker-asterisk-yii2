<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Extensions */

$this->title = 'Create Extensions';
$this->params['breadcrumbs'][] = ['label' => 'Extensions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="extensions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
