<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Queue_membersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queue-members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'queue_name') ?>

    <?= $form->field($model, 'interface') ?>

    <?= $form->field($model, 'membername') ?>

    <?= $form->field($model, 'state_interface') ?>

    <?= $form->field($model, 'penalty') ?>

    <?php // echo $form->field($model, 'paused') ?>

    <?php // echo $form->field($model, 'uniqueid') ?>

    <?php // echo $form->field($model, 'wrapuptime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
