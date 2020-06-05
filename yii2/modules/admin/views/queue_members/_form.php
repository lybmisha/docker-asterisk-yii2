<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QueueMembers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queue-members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'queue_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interface')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_interface')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penalty')->textInput() ?>

    <?= $form->field($model, 'paused')->textInput() ?>

    <?= $form->field($model, 'wrapuptime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
