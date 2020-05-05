<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExtensionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="extensions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'context') ?>

    <?= $form->field($model, 'exten') ?>

    <?= $form->field($model, 'priority') ?>

    <?= $form->field($model, 'app') ?>

    <?php // echo $form->field($model, 'appdata') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
